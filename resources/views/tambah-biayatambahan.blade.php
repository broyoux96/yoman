@extends('layout.master')
@section('content')
<div class="card card-default">
    <div class="form-row">
        <div class="col-md-4">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblJenisBiaya">Jenis Biaya</span>
                <select name="" id="" class="form-control">
                <option value="Biaya Peralatan">Biaya Peralatan</option>
                <option value="Biaya Produksi">Biaya Produksi</option>
                <option value="Biaya Operasional">Biaya Operasional</option>
                <option value="Pajak">Pajak</option>
          </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblTanggalInvoice">Tanggal Biaya</span>
                <input name="" type="text" value="mm/dd/yyyy" id="" class="form-control fa-calendar" placeholder="Tanggal Biaya" onkeydown="return false;" required="required" />
                <span id="" style="color:Red;display:none;">Tanggal Harus Diisi!</span>
                <span id="" class="alert-danger"></span>
            </div>
        </div>
    </div>
    <hr />
    <div id="table_box_bootstrap" class="table table-responsive table-light table-hover">
        <table class="mb-0 table">
            
                    <tr>
                        <td style="width:400px">
                            <span id="">Item Name</span>
                        </td>
                        <td style="width:400px">
                            <span id="">Total Price</span>
                        </td>
                        <td colspan="2" style="width:100px">&nbsp;</td>
                    </tr>
                
                    <tr>
                        <td>
                            <input name="" type="text" id="" class="form-control text-uppercase" placeholder="Item Name" required="required" />
                        </td>
                        <td>
                            <input name="" type="text" id="" class="form-control" placeholder="Rp0" />
                        </td>
                        <td colspan="2" style="text-align:center">
                            <a id="" class="btn btn-success" href="">+</a>
                            <a id="" class="btn btn-danger left" href="">-</a>
                        </td>
                    </tr>
                    <tr>
                <td>
                    <input type="button" name="" value="Back" onclick="" id="" class="mt-2 btn btn-danger" />
                </td>
                <td>
                    <div class="position-relative form-group">
                        <span id="">Grand Total : </span>
                        <input name="" type="text" value="" id="" disabled="disabled" class="form-control" />
                    </div>
                </td>
                <td style="text-align:center">
                    <div class="position-relative form-group">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Submit" onclick="" id="ContentPlaceHolder1_btnSubmit" class="mt-2 btn btn-primary" />
                    </div>
                </td>
            </tr>
        </table>
       
    </div>
</div>
@endsection