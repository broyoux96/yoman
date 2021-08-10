@extends('layout.master')
@section('content')
<section class="content">
    <div class="card-body">
      <a href="{{ url('createcustomer') }}" class="btn btn-primary" >add</a>
    <div class="table table-responsive table-light table-bordered table-hover">
    <table class="mb-0 table">
        <thead>
            <tr style="background-color:white">
                <th>Nama Customer</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th id="ContentPlaceHolder1_thVal" colspan="2" style="text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $keys=>$value)
                    <tr>
                        <td>{{ $value->customernama }}</td>
                        <td>{{ $value->customeralamat }}</td>
                        <td>{{ $value->customerhp }}</td>
                        <td>{{ $value->customeremail }}</td>
                        <td>
                          <div class="col text-center">
                          <a href="{{ url('datacustomer/'.$value->id.'/edit') }}" class="btn btn-info" >Update</a>
                          </div>
                          <td><form action="{{ url('datacustomer/'.$value->id) }}" method="POST">
                            @csrf
                            <div class="col text-center">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit" >DELETE</button>
                            </div>
                          </td>
                        </form></td>
                        </td>
                    </tr>
                </tbody>
                    @endforeach
                  </table>
                </div>

     </div>
    </section>
    
 
@endsection
