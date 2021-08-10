@extends('layout.master')
@section('content')
<div class="card card-default">
       
    <div class="form-row">
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblNoInvoice">No Invoice</span>
                <input name="noinvoicepembelian" type="text" class="form-control text-uppercase" placeholder="No Invoice" required="required" />
                <span id="ContentPlaceHolder1_vldNoInvoice" class="alert-danger"></span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span>Supplier Name</span>
                <select name="id_supplier" class="form-control" id="supplierid">
                    @foreach ($supplier as $keys=>$value)
                    <option value="{{ $value->id_supplier }}">{{ $value->suppliernama }}</option>
                    @endforeach
                 </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblTanggalInvoice">Tanggal Pembelian</span>
                <input name="ctl00$ContentPlaceHolder1$txtCldBrgBeli" type="text" value="mm/dd/yyyy" id="ContentPlaceHolder1_txtCldBrgBeli" class="form-control fa-calendar" placeholder="Tanggal Beli" onkeydown="return false;" required="required" />
                <span id="ContentPlaceHolder1_RequiredFieldValidator2" style="visibility:hidden;">RequiredFieldValidator</span>
                <span id="ContentPlaceHolder1_CompareValidator2" style="color:Red;display:none;">Tanggal Kurang dari Jatuh Tempo</span>
                <span id="ContentPlaceHolder1_vldTglInv" class="alert-danger"></span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="">Jenis Tagihan</span>
                <select name="" id="" class="form-control">
                <option value="KONTRABON">Kontrabon</option>
                <option value="CASH">Cash</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblJtuhTempo">Tanggal Jatuh Tempo</span>
                <input name="" type="text" value="mm/dd/yyyy" id="" class="form-control fa-calendar" placeholder="Tanggal Jatuh Tempo" onkeydown="return false;" required="required" />
                <span id="" style="visibility:hidden;">RequiredFieldValidator</span>
                <span id="" style="color:Red;display:none;">tanggal Harus Lebih Dari Tanggal Beli</span>
                <span id="" class="alert-danger"></span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="">Detail Rekening Bank</span>
                <input name="norekeningpembayaran" type="text" id="" class="form-control text-uppercase" placeholder="Bank-No Rekening" required="required" />
                <span class="alert-danger"></span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group">
                <span id="ContentPlaceHolder1_lblGudang">Nama Gudang</span>
                <select name="id_gudang" id="idgudang" class="form-control">
                    <option>-- PILIH --</option>
                    @foreach ($gudang as $item)
                            <option name="" value="{{ $item->id_gudang }}">{{ $item->gudangnama }}</option>
                            @endforeach
                 </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="position-relative form-group" id="">
                <span id="">Sisa Kapasitas Gudang</span>
                <div id="kapasistasgudang">
                <input name="gudangkapasitas" type="text" value="" id="" readonly="readonly" class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div id="table_box_bootstrap" class="table table-responsive table-light table-hover">
        <table class="table">
            
                <tr>
                    <th>
                        <span id="">Item Name</span>
                    </th>
                    <th>
                        <span id="">Qty / Kg</span>
                    </th>
                    <th>
                        <span id="">Price / Kg</span>
                    </th>
                    <th>
                        <span id="">Box</span>
                    </th>
                    <th>
                        <span id="">Total Price</span>
                    </th>
            
                </tr>
                
{{-- 
                <tr>
                    <td>
                        <select name="barangnama" id="idbarang" class="form-control">
                            @foreach ($barang as $item)
                                    <option name="" value="{{ $item->id_barang }}">{{ $item->barangnama }}</option>
                                    @endforeach
                         </select>
                    </td>
                    <td>
                        <input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                    </td>
                    <td>
                        <input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                    </td>
                    <td>
                        <input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />
                    </td>
                    <td>
                        <input name="" type="text" onchange="" onkeypress="" id="" disabled="disabled" class="form-control" placeholder="Rp0" />
                    </td>
                </tr>
                 --}}
        </table>


        <div class="row col-md-12">
            <div id="muncultambah"></div>
            <div class="col-md-2">
                <a href="{{ url('pembelian') }}" class=" mt-2 btn btn-danger">Back</a>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <a href="{{ url('ambilbarang/GDG002/SUP002') }}" class="btn btn-danger">test</a>
                    <input type="submit" name="" value="Submit" onclick="" id="" class="mt-2 btn btn-primary" />
                </div>
            </div>
            <div class="col-md-2">
                <button class=" mt-2 btn btn-success" id="tambahbarang" onclick="tambahform()">+</button>

            </div>  
            <div class="col-md-2">
                <div class="position-relative form-group">
                    <span id="">Grand Total : </span>
                    <input name="" type="text" value="0" id="" disabled="disabled" class="form-control" />
                </div>
            </div>
               
            
</div>

</div>
</div>


@endsection

@section('js_native')
<script type="text/javascript">
    $('#idgudang').change(function(){
        var  idgudang = $(this).val();
        if(idgudang){
            $.ajax({
                type:"get",
                url :"ambilsupplier/"+idgudang,
                    success: function(gudang){
                        var isigudang = ''; 
                        isigudang +='<input name="gudangkapasitas" type="text" value="'+ gudang[0]['gudangsisakapasitas'] +'" readonly="readonly" class="form-control" />';
                    $('#kapasistasgudang').html(isigudang);
                    }
            })
        } else{
            $('#kapasistasgudang').empty();
  
        }
    })
    var isi = '';

  function tambahform(){

    //   clicks = ;
    //   isi +='<input name="gudangkapasitas" type="text" value="" readonly="readonly" class="form-control" />';
    isi += '<tr>'
        +'<td>'
        +'<select name="barangnama" class="form-control">'
        +'@foreach ($barang as $item)'
        +'<option name="" value="{{ $item->id_barang }}">{{ $item->barangnama }}</option>'
        +'@endforeach'
        +'</select>'
        +'</td>'
        +'<td>'
        +'<input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />'
        +'</td>'
        +'<td>'
        +'<input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />'
        +'</td>'
        +'<td>'
        +'<input name="" type="text" onchange="" onkeypress="" id="" class="form-control" placeholder="0" onfocus="" required="required" />'
        +'</td>'
        +'<td>'
        +'<input name="" type="text" onchange="" onkeypress="" id="" disabled="disabled" class="form-control" placeholder="Rp0" />'
        +'</td>'
        +'</tr>';

      $('#muncultambah').html(isi);
      
  }
  </script>
@endsection