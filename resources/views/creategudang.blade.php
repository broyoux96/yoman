@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datagudang') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Gudang</label>
          <input type="text" class="form-control" name="gudangnama" placeholder="Masukan Nama Gudang">
        </div>
    <div class="form-group col-md-6">
      <label >Kapasitas Gudang</label>
      <input type="text" class="form-control" name="gudangkapasistas" placeholder="Masukan Kapasitas Gudang">
    </div>
    </div>
    <button type="submit" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection