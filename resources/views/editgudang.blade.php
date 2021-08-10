@extends('layout.master')
@section('content')
<br>
<label><h1> Data Customer</h1></label>
<form action="{{ url('datagudang/'.$model->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Gudang</label>
          <input type="text" class="form-control" name="gudangnama" value="{{ $model->gudangnama }}">
        </div>
    <div class="form-group col-md-6">
      <label >Kapasitas Gudang</label>
      <input type="text" class="form-control" name="gudangkapasistas" value="{{ $model->gudangkapasitas }}" placeholder="Masukan Kapasitas Gudang">
    </div>
    </div>
    <a href="{{ url('datagudang') }}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection