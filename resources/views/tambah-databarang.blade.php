@extends('layout.master')
@section('content')
<form action="{{ url('databarang') }}" method="POST">
    @csrf
<div class="container-fluid">
    <div class="card-body">         
         <div class="form-row">
              <div class="col-md-6">
                 <div class="position-relative form-group">
                     <span id="">Item Code</span>
                     <input name="" type="text" value="{{$kodebarang }}" id="" disabled="disabled" class=" form-control" />
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="position-relative form-group">
                     <span id="">Nama Barang</span>
                     <input name="barangnama" type="text" class="form-control text-uppercase" placeholder="Nama Barang" required="required" />
                     <span id="" class="alert-danger"></span>
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
                <span id="ContentPlaceHolder1_lblStorage">Letak Gudang</span>
                <select name="id_gudang" id="ContentPlaceHolder1_ddlStorage" class="form-control">
                   @foreach ($gudang as $item)
                           <option name="" value="{{ $item->id_gudang }}">{{ $item->gudangnama }}</option>
                           @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <span id="">Categori Barang</span>
                    <select name="barangcategory" class="form-control">
                        <option>PABRIKAN</option>
                     </select>
                    {{-- <input name="barangcategory" value="OLAHAN" type="text" id="" class="form-control text-uppercase" required="required"disabled /> --}}
                    <span class="alert-danger"></span>
                </div>
            </div>
         </div>
         <button onclick="goBack()" class="btn btn-danger">Back</button>
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
     </div>
   </div>
</form>
<script>
    function goBack() {
      window.history.back();
    }
    </script>
@endsection