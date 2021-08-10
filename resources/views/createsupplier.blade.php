@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datasupplier') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Supplier</label>
          <input type="text" class="form-control" name="suppliernama" placeholder="Masukan Nama Supplier">
        </div>
    <div class="form-group col-md-6">
      <label >Supplier E-mail</label>
      <input type="mail" class="form-control" name="supplieremail" placeholder="Masukan alamat Email">
    </div>
    <div class="form-group  col-md-6">
          <label >No Hp Supplier</label>
          <input type="text" class="form-control" name="supplierhp" placeholder="Masukan Nomor Supplier">
    </div>
    <div class="form-group col-md-6">
        <label>Alamat Supplier</label>
        <input type="text" class="form-control" name="supplieralamat" placeholder="Masukan Alamat lengkap">
    </div>
    </div>
    <button type="submit" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection