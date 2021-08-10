@extends('layout.master')
@section('content')
<div class="card card-default">
    <div class="card-body">
        <a href="{{ url('tampildatabrg') }}" class="btn btn-primary">Tambah Barang</a>
        <a href="{{ url('tampildatabrgolahan') }}" class="btn btn-success">Tambah Barang Olahan</a>
    </div>
    <div class="card-body">
    <div class="form-row">
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="" class="font-weight-bold">Search Box</span>
                <input name="" type="text" id="" class="form-control" onkeyup="Filter(this);" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="" class="font-weight-bold">Supplier</span>
                <select name="" id="" class="form-control">
                  <option value=""></option>
                  <option value="">-------------------</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="" class="font-weight-bold">Inventory</span>
                <select name="" id="" class="form-control">
                  <option value=""></option>
                  <option value="">-------------------</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="" class="font-weight-bold">Category</span>
                <select name="" id="" class="form-control">
                  <option value=""></option>
                  <option value="">-------------------</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="" class="font-weight-bold">Sort By</span>
                <select name="" id="" class="form-control">
                  <option value=""></option>
                  <option value="">-------------------</option>
                  <option value="">Code</option>
                  <option value="">Nama</option>
                  <option value="">Tanggal</option>
                  <option value="">Supplier</option>
                  <option value="">Inventory</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <br />
                <input type="submit" name="" value="Search" id="" class="btn btn-dark" />
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div id="table_box_bootstrap" class="table table-responsive table-light table-bordered table-hover">
    <table class="mb-0 table">
        <thead>
            <tr style="background-color:white">
                <th>Item Code</th>
                <th>Nama Barang</th>
                <th>Supplier</th>
                <th>Tanggal Beli Terakhir</th>
                <th>Qty</th>
                <th>Satuan</th>
                <th>Jumlah Box</th>
                <th>Nama Penyimpanan</th>
                <th>Category</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $keys=>$value)
            <tr>
                <td>{{ $value->id_barang }}</td>
                <td>{{ $value->barangnama }}</td>
                <td>{{ $value->suppliernama }}</td>
                <td>{{ $value->barangtglbeli }}</td>
                <td>{{ $value->barangqty }}</td>
                <td>{{ $value->barangsatuan }}</td>
                <td>{{ $value->barangjumlahbox }}</td>
                <td>{{ $value->gudangnama }}</td>
                <td>{{ $value->barangcategory }}</td>

                <td>
                  <button class="btn-primary">Update</button>
                    
                </td>
            </tr>
            @endforeach
                    
                
        </tbody>
    </table>
    </div>
</div>    
@endsection
