@extends('layout.master')
@section('content')  
    <div id="table_box_bootstrap" class="table table-responsive table-light table-hover">
        <form action="{{ url('databarang') }}" method="POST">
            @csrf
        <div class="container-fluid">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <span>Item Code</span>
                        <input name="" type="text" value="{{$kodebarang }}" disabled="disabled" class=" form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <span id="">Nama Barang</span>
                        <input name="barangnama" type="text" id="" class="form-control text-uppercase" placeholder="Nama Barang Olahan" required="required" />
                        <span class="alert-danger"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <span id="">Nama Gudang</span>
                        <select name="id_gudang" id="ContentPlaceHolder1_ddlStorage" class="form-control">
                            @foreach ($gudang as $item)
                                    <option name="" value="{{ $item->id_gudang }}">{{ $item->gudangnama }}</option>
                                    @endforeach
                         </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <span id="">Supplier Name</span>
                        <select name="id_supplier" class="form-control">
                            @foreach ($supplier as $item)
                            <option value="{{ $item->id_supplier }}">{{ $item->suppliernama }}</option>
                            @endforeach
                         </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <span id="">Categori Barang</span>
                        <select name="barangcategory" class="form-control">
                            <option>OLAHAN</option>
                         </select>
                        {{-- <input name="barangcategory" value="OLAHAN" type="text" id="" class="form-control text-uppercase" required="required"disabled /> --}}
                        <span class="alert-danger"></span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-light text-right">
                    <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        
        </form>
    </div>
    


<script>
    function goBack() {
      window.history.back();
    }
    </script>
@endsection