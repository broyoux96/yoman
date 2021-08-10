@extends('layout.master')
@section('content')
    <div class="card-body">
      <a href="{{ url('createsupplier') }}" class="btn btn-primary">add</a>
    <div class="table table-responsive table-light table-bordered table-hover">
    <table class="mb-0 table">
        <thead>
            <tr style="background-color:white">
                <th>Nama Supplier</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th id="ContentPlaceHolder1_thVal" colspan="2" style="text-align:center">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $keys=>$value)
                    <tr>
                        <td>{{ $value->suppliernama }}</td>
                        <td>{{ $value->supplieralamat }}</td>
                        <td>{{ $value->supplierhp }}</td>
                        <td>{{ $value->supplieremail }}</td>
                        <td>
                          <div class="col text-center">
                          <a href="{{ url('datasupplier/'.$value->id.'/edit') }}" class="btn btn-info" >Update</a>
                          </div>
                          <td><form action="{{ url('datasupplier/'.$value->id) }}" method="POST">
                            @csrf
                            <div class="col text-center">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit" >DELETE</button>
                            </div></td>
                        </td>

                    </tr>
                
                    
                @endforeach
                </tbody>
                  </table>
                </div>

     </div>
@endsection