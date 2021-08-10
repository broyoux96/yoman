@extends('layout.master')
@section('content')
<br>
<label><h1> Data Pegawai</h1></label>
<form action="{{ url('datapegawai') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >Nama Pegawai</label>
          <input type="text" class="form-control" name="pegawainama" placeholder="Masukan Nama Pegawai">
        </div>
        <div class="form-group col-md-6">
          <label >Username Pegawai</label>
          <input type="email" class="form-control" name="pegawaiusername" placeholder="Masukan Nama Pegawai">
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Email</label>
        <input type="email" class="form-control" name="pegawaimail" placeholder="Masukan Email">
      </div>
      <div class="form-group col-md-6">
        <label >Password</label>
        <input type="password" class="form-control" name="pegawaipassword" placeholder="Masukan Password">
      </div>
    </div>
    <div class="form-group">
      <label >Alamat</label>
      <input type="text" class="form-control" name="pegawaialamat" placeholder="Masukan Alamat Lengkap">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label >No Hp Pegawai</label>
          <input type="text" class="form-control" name="pegawaihp" placeholder="Masukan Nomor Pegawai">
        </div>
        <div class="form-group col-md-6">
            {{-- <div class="form-group col-md-6">
                <label >Role</label>
                <input type="text" class="form-control" name="id_roles" placeholder="Masukan ROLE">
            </div> --}}

         <label >Role</label>
          <select type="text" class="form-control" name="id_roles">
              <option value="1">Superuser</option>
              <option value="2">Owner</option>
              <option value="3">Admin</option>
              <option value="4">Gudang</option>
          </select>
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection