@extends('layout.master')
@section('content')
<section class="content">
    <div class="card-body">
      <a href="{{ url('creategudang') }}" class="btn btn-primary" >add</a>
    <div class="table table-responsive table-light table-bordered table-hover">
    <table class="mb-0 table">
        <thead>
            <tr style="background-color:white">
                <th>Nama Gudang</th>
                <th>Kapasitas Kudang</th>
                <th>Gudang Sisa Kapasitas</th>
                <th id="ContentPlaceHolder1_thVal" colspan="2" style="text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $keys=>$value)
                    <tr>
                        <td>{{ $value->gudangnama }}</td>
                        <td>{{ $value->gudangkapasitas }}</td>
                        <td>{{ $value->gudangsisakapasitas }}</td>
                        <td>
                          <div class="col text-center">
                          <a href="{{ url('datagudang/'.$value->id.'/edit') }}" class="btn btn-info" >Update</a>
                          </div>
                          <td><form action="{{ url('datagudang/'.$value->id) }}" method="POST">
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
