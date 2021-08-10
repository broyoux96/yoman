@extends('layout.master')
@section('content')
<div class="card-body">
    <div class="form-row">
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_Label1" class="font-weight-bold">Search Box</span>
                <input name="ctl00$ContentPlaceHolder1$txtSearch" type="text" id="ContentPlaceHolder1_txtSearch" class="form-control" onkeyup="Filter(this);" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_Label4" class="font-weight-bold">Inventory</span>
                <select name="ctl00$ContentPlaceHolder1$ddlInventory" id="ContentPlaceHolder1_ddlInventory" class="form-control">
<option value=""></option>
<option value="">-------------------</option>
<option value="1">GUDANG BAWAH</option>
<option value="2">GUDANG ATAS</option>
</select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <br />
                <input type="submit" name="ctl00$ContentPlaceHolder1$btnFilter" value="Search" id="ContentPlaceHolder1_btnFilter" class="btn btn-dark" />
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div id="table_box_bootstrap" class="table table-responsive table-light table-bordered table-hover">
        <table class="mb-0 table">
            <thead>
                <tr style="background-color:white">
                    <th>Nama Barang</th>
                    <th>Sisa Barang Qty</th>
                    <th>Barang Olahan Terpakai(-)</th>
                    <th>Total Terjual (-)</th>
                    <th>Retur Penjualan (+)</th>
                    <th>Retur Pembelian (-)</th>
                    <th>Total Pembelian (+)</th>
                    <th id="ContentPlaceHolder1_thVal1">Action</th>

                </tr>
            </thead>
            <tbody>
                
                        <tr>
                            <td>
                        
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                            <td>
                              
                            </td>
                            <td id="ContentPlaceHolder1_RepeaterListItm_qtyTotalPembelian_0">
                              
                            </td>

                            <td>
                              <button href="#Adjustqty" data-toggle="modal" class="btn-primary">Adjust</button>
                            </td>

                        </tr>
                    
                        
                    
            </tbody>
        </table>
    `</div>
</div>
<hr />
<h5 class="card-title"><span id="ContentPlaceHolder1_lblHeader2" class="font-weight-bold">Arus Data Box</span></h5>
<div class="card-body">
    <div class="form-row">
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_Label2" class="font-weight-bold">Search Box</span>
                <input name="ctl00$ContentPlaceHolder1$txtSearch1" type="text" id="ContentPlaceHolder1_txtSearch1" class="form-control" onkeyup="Filter1(this);" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_Label6" class="font-weight-bold">Inventory</span>
                <select name="ctl00$ContentPlaceHolder1$ddlInventory1" id="ContentPlaceHolder1_ddlInventory1" class="form-control">
<option value=""></option>
<option value="">-------------------</option>
<option value="1">GUDANG BAWAH</option>
<option value="2">GUDANG ATAS</option>

</select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <br />
                <input type="submit" name="ctl00$ContentPlaceHolder1$btnFilter1" value="Search" id="ContentPlaceHolder1_btnFilter1" class="btn btn-dark" />
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div id="table_box_bootstrap1" class="table table-responsive table-light table-bordered table-hover">
        <table class="mb-0 table">
            <thead>
                <tr style="background-color:white">
                    <th>Nama Barang</th>
                    <th>Sisa Jumlah Box</th>
                    <th>Box Olahan Terpakai(-)</th>
                    <th>Total Terjual (-)</th>
                    <th>Retur Penjualan (+)</th>
                    <th>Retur Pembelian (-)</th>
                    <th>Total Pembelian (+)</th>
                    <th id="ContentPlaceHolder1_thVal2">Action</th>

                </tr>
            </thead>
            <tbody>
                
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                              
                            </td>
                            <td>
                              
                            </td>
                            <td id="ContentPlaceHolder1_rptBoxUpdate_boxTotalPembelian_0">
                                
                        </td>

                            <td>
                              <button href="#Adjustbox" data-toggle="modal" class="btn-primary">Adjust</button></a>
                            </td>
                        </tr>
            </tbody>
        </table>
    `</div>
</div>
@endsection
    <!-- Modal Edit Data Qty -->
    <div class="modal fade text-xs-left" id="Adjustqty" tab../../index.php="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-gray-100" id="exampleModalLabel"><i
                        class="fa fa-edit mr-2"></i>Stock Opname</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit.php?id=12"
                method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Nama Barang : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Nama Barang" class="form-control"
                            name="" required>
                    </div>
                    <label>Sisa Barang Qty : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                        </div>
                        <input type="text" value="" class="form-control" placeholder="Masukan Alamat"
                            name="" required>
                    </div>
                    <label>Barang Olahan Terpakai : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Barang Olahan Terpakai" class="form-control"
                            name="" required>
                    </div>
                    <label>Total Terjual : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Total terjual" class="form-control"
                            name="" required>
                    </div> 
                    <label>Reture Penjualan : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Reture Penjualan" class="form-control"
                            name="" required>
                    </div>     
                    <label>Reture Pembelian : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Reture Pembelian" class="form-control"
                            name="" required>
                    </div>       
                    <label>Total Pembelian : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Total Pembelian" class="form-control"
                            name="" required>
                    </div>               
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </button>
                    <button name="submit" type="submit"
                        class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Edit -->
<!-- Modal Edit Data Box -->
     <div class="modal fade text-xs-left" id="Adjustbox" tab../../index.php="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-gray-100" id="exampleModalLabel"><i
                        class="fa fa-edit mr-2"></i>Stock Opname</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit.php?id=12"
                method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Nama Barang : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Nama Barang" class="form-control"
                            name="" required>
                    </div>
                    <label>Sisa Jumlah Box : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                        </div>
                        <input type="text" value="" class="form-control" placeholder="Masukan Jumlah Box"
                            name="" required>
                    </div>
                    <label>Box Olahan Terpakai : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Box Olahan Terpakai" class="form-control"
                            name="" required>
                    </div>
                    <label>Total Terjual : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Total terjual" class="form-control"
                            name="" required>
                    </div> 
                    <label>Reture Penjualan : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Reture Penjualan" class="form-control"
                            name="" required>
                    </div>     
                    <label>Reture Pembelian : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Reture Pembelian" class="form-control"
                            name="" required>
                    </div>       
                    <label>Total Pembelian : </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="text" value="" placeholder="Masukan Total Pembelian" class="form-control"
                            name="" required>
                    </div>               
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </button>
                    <button name="submit" type="submit"
                        class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Edit -->