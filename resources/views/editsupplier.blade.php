@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datasupplier/'.$model->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Supplier</label>
          <input type="text" class="form-control" name="suppliernama" placeholder="Masukan Nama customer" value="{{ $model->suppliernama }}">
        </div>
    <div class="form-group col-md-6">
      <label >Supplier mail</label>
      <input type="mail" class="form-control" name="supplieremail" placeholder="Masukan alamat Email" value="{{ $model->supplieremail }}">
    </div>
    <div class="form-group  col-md-6">
          <label >No Hp Supplier</label>
          <input type="text" class="form-control" name="supplierhp" placeholder="Masukan Nomor Pegawai" value="{{ $model->supplierhp }}">
    </div>
    <div class="form-group col-md-6">
        <label>Alamat Supplier</label>
        <input type="text" class="form-control" name="supplieralamat" placeholder="Masukan Alamat lengkap" value="{{ $model->supplieralamat }}">
    </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection