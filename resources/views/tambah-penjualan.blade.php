@extends('layout.master')
@section('content')
<div class="card card-default">
    <div class="form-row">
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">No Invoice</span>
                         <input name="" type="text" id="" class="form-control text-uppercase" placeholder="No Invoice" required="required" />
                         <span id="" class="alert-danger"></span>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">Customer Name</span>
                         <select name="" id="
                         " class="form-control">
                           
                         </select>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">Tanggal Penjualan</span>
                         <input name="" type="text" value="mm/dd/yyyy" id="" class="form-control fa-calendar" placeholder="Tanggal Jual" onkeydown="" required="" />
                         
                         <span id="" style="visibility:hidden;">RequiredFieldValidator</span>
                         <span id="" style="color:Red;display:none;">Tanggal Kurang dari Jatuh Tempo</span>
                         <span id="" class="alert-danger"></span>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">Jenis Tagihan</span>
                         <select name="" id="" class="form-control">
                           
                         </select>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">Tanggal Jatuh Tempo</span>
                         <input name="" type="text" value="mm/dd/yyyy" id="" class="form-control fa-calendar" placeholder="Tanggal Jatuh Tempo" onkeydown="" required="" />
                         
                         <span id="" style="visibility:hidden;">RequiredFieldValidator</span>
                         <span id="" style="color:Red;display:none;">tanggal Harus Lebih Dari Tanggal Beli</span>
                         <span id="" class="alert-danger"></span>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="">Detail Rekening Bank</span>
                         <input name="" type="text" value="BCA - 3460164043" id="" disabled="disabled" class=" form-control" required="required" />
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="position-relative form-group">
                         <span id="ContentPlaceHolder1_lblGudang">Nama Gudang</span>
                         <select name="" onchange="" id="ContentPlaceHolder1_ddlNamaGudang" class="form-control">
                           
                         </select>
                     </div>
                 </div>
             </div>
             <hr />
             <div id="" class="table table-responsive table-light table-hover">
                 <table class="mb-0 table">
                     
                         <tr>
                             <td style="width:300px">
                                 <span id="">Item Name</span>
                             </td>
                             <td style="width:120px">
                                 <span id="">Qty / Kg</span>
                             </td>
                             <td style="width:100px">
                                 <span id="">Price / Kg</span>
                             </td>
                             <td style="width:70px">
                                 <span id="">Box</span>
                             </td>
                             <td style="width:230px">
                                 <span id="">Total Price</span>
                             </td>
                             <td colspan="2" style="width:100px">&nbsp;</td>
                         </tr>
                     
                         <tr>
                             <td>
                                 
                                 
                                 <select name="" onchange="" id="" class="form-control">
                                   
                                 </select>
                             </td>
                             <td>
                                 <input name="" type="text" onchange="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                             </td>
                             <td>
                                 <input name="" type="text" onchange="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                             </td>
                             <td>
                                 <input name="" type="text" onchange="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                             </td>
                             <td>
                                 <input name="" type="text" onchange="" id="" disabled="disabled" class=" form-control" placeholder="Rp0" />
                             </td>
                             <td colspan="2" style="text-align:center">
                                 <a id="" class="btn btn-success" href="">+</a>
                                 <a id="" class="btn btn-danger left" href="">-</a>
                             </td>
                         </tr>
                     
                 <tr>
                     <td colspan="4">
                        <a href="{{ url('penjualan') }}" class="btn btn-danger">Back</a>
                    </td>
                     <td>
                         <div class="position-relative form-group">
                             <span id="">Grand Total : </span>
                             <input name="" type="text" value="0" id="" disabled="disabled" class=" form-control" />
                         </div>
                     </td>
                     <td style="text-align:center">
                         <div class="position-relative form-group">
                             <input type="submit" name="" value="Submit" onclick="" id="" class="mt-2 btn btn-primary" />
                         </div>
                     </td>
                 </tr>
             </table>
         </div>
     </div>
 </div>
    
@endsection