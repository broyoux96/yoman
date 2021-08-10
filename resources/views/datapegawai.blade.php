@extends('layout.master')
@section('content')
<div class="card-body">
    <a href="{{ url('createpegawai') }}" class="btn btn-primary">add</a>
  <div class="table table-responsive table-light table-bordered table-hover">
  <table class="mb-0 table">
      <thead>
          <tr style="background-color:white">
              <th>Employee Name</th>
              <th>Username</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Role</th>
              <th id="ContentPlaceHolder1_thVal" colspan="2" style="text-align:center">Action</th>

          </tr>
      </thead>
      <tbody>
          @foreach ($pegawai as $keys=>$value)
                  <tr>
                      <td> {{ $value->pegawainama }}</td>
                      <td> {{ $value->pegawaiusername }} </td>
                      <td> {{ $value->pegawaialamat }}</td>
                      <td> {{ $value->pegawaihp }}</td>
                      <td> {{ $value->pegawaimail }}</td>
                      <td> {{ $value->NameRole }}</td>
                      <td>
                        <div class="col text-center">
                        <a href="{{ url('datapegawai/'.$value->id.'/edit') }}" class="btn btn-info">Update</a>
                        </div>
                        <td><form action="{{ url('datapegawai/'.$value->id) }}" method="POST">
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
    
@endsection