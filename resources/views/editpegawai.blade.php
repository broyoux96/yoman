@extends('layout.master')
@section('content')
<br>
<label><h1> Data Pegawai</h1></label>
<form action="{{ url('datapegawai/'.$model->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Pegawai</label>
          <input type="text" class="form-control" name="pegawainama" value="{{ $model->pegawainama }}" placeholder="Masukan Nama Pegawai">
        </div>
        <div class="form-group col-md-6">
          <label >Username Pegawai</label>
          <input type="email" class="form-control" name="pegawaiusername" value="{{ $model->pegawaiusername }}" placeholder="Masukan Nama Pegawai">
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Email</label>
        <input type="email" class="form-control" name="pegawaimail" placeholder="Masukan Email" value="{{ $model->pegawaimail }}">
      </div>
      <div class="form-group col-md-6">
        <label >Password</label>
        <input type="password" class="form-control" name="pegawaipassword" placeholder="Masukan Password" value="{{ $model->pegawaipassword }}">
      </div>
    </div>
    <div class="form-group">
      <label >Alamat</label>
      <input type="text" class="form-control" name="pegawaialamat" placeholder="Masukan Alamat Lengkap" value="{{ $model->pegawaialamat }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >No Hp Pegawai</label>
          <input type="text" class="form-control" name="pegawaihp" placeholder="Masukan Nomor Pegawai" value="{{ $model->pegawaihp }}">
        </div>
        <div class="form-group col-md-6">
            <div class="form-group col-md-6">
                <label >Role</label>
                <input type="text" class="form-control" name="idrole" placeholder="Masukan ROLE" value="{{ $model->idrole }}" >
            </div>

         <!--<label >Role</label>
          <select type="text" class="form-control" name="idroles">
              <option value="1">Superuser</option>
              <option value="2">Owner</option>
              <option value="3">Admin</option>
              <option value="4">Gudang</option>
          </select>-->
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection