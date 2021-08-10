@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datacustomer') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Customer</label>
          <input type="text" class="form-control" name="customernama" placeholder="Masukan Nama customer">
        </div>
    <div class="form-group col-md-6">
      <label >Customer mail</label>
      <input type="mail" class="form-control" name="customeremail" placeholder="Masukan alamat Email">
    </div>
    <div class="form-group  col-md-6">
          <label >No Hp Pegawai</label>
          <input type="text" class="form-control" name="customerhp" placeholder="Masukan Nomor Pegawai">
    </div>
    <div class="form-group col-md-6">
        <label>Alamat Customer</label>
        <input type="text" class="form-control" name="customeralamat" placeholder="Masukan Alamat lengkap">
    </div>
    </div>
    <button type="submit" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection