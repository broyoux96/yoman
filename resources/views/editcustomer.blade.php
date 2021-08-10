@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datacustomer/'.$model->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Customer</label>
          <input type="text" class="form-control" name="customernama" placeholder="Masukan Nama customer" value="{{ $model->customernama }}">
        </div>
    <div class="form-group col-md-6">
      <label >Customer mail</label>
      <input type="mail" class="form-control" name="customeremail" placeholder="Masukan alamat Email" value="{{ $model->customeremail }}">
    </div>
    <div class="form-group  col-md-6">
          <label >No Hp Pegawai</label>
          <input type="text" class="form-control" name="customerhp" placeholder="Masukan Nomor Pegawai" value="{{ $model->customerhp }}">
    </div>
    <div class="form-group col-md-6">
        <label>Alamat Customer</label>
        <input type="text" class="form-control" name="customeralamat" placeholder="Masukan Alamat lengkap" value="{{ $model->customeralamat }}">
    </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection