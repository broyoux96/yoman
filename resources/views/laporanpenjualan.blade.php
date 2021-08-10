@extends('layout.master')
@section('content')
<section class="content">
    <div class="card card-default">
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Laporan Penjualan Berdasarkan Tahun :</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              </div>
            <!-- /.col -->
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Dari Bulan :</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Januari</option>
                  <option>Febuari</option>
                  <option>Maret</option>
                  <option>April</option>
                  <option>Mei</option>
                  <option>Juni</option>
                  <option>July</option>
                  <option>Agustus</option>
                  <option>September</option>
                  <option>Oktober</option>
                  <option>November</option>
                  <option>Desember</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Sampai Bulan :</label>
                <select class="form-control select2" style="width: 100%;">
                   <option>Januari</option>
                  <option>Febuari</option>
                  <option>Maret</option>
                  <option>April</option>
                  <option>Mei</option>
                  <option>Juni</option>
                  <option>July</option>
                  <option>Agustus</option>
                  <option>September</option>
                  <option>Oktober</option>
                  <option>November</option>
                  <option>Desember</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <button class="btn-warning">Generete</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </div>
      </div>
      <div class="card-body">
      <div class="table table-responsive table-light table-hover">
          <table class="mb-0 table">
              <thead>
                  <tr>
                      <th colspan="3">&nbsp;</th>
                      <th colspan="2">
                          <span id="ContentPlaceHolder1_Label5" class="font-weight-bold">Laporan Laba Rugi</span>
                      </th>
                      <th style="text-align:right">
                          <input type="submit" name="ctl00$ContentPlaceHolder1$btnCetakGnrt" value="Cetak" id="ContentPlaceHolder1_btnCetakGnrt" disabled="disabled" class="aspNetDisabled btn btn-warning" />
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <span id="ContentPlaceHolder1_Label3" class="font-weight-bold">1</span>
                      </td>
                      <td>
                          <span id="ContentPlaceHolder1_Label4" class="font-weight-bold">Penjualan</span>
                      </td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px">
                          <span id="ContentPlaceHolder1_GTPenjualan" class="font-weight-bold">0</span>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <span id="ContentPlaceHolder1_Label6" class="font-weight-bold">2</span>
                      </td>
                      <td>
                          <span id="ContentPlaceHolder1_Label7" class="font-weight-bold">Harga Pokok Penjualan</span>
                      </td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px">
                          <span id="ContentPlaceHolder1_GTPembelian" class="font-weight-bold">0</span>
                      </td>
                  </tr>
                  <tr>
                      <td colspan="4">&nbsp;</td>
                      <td colspan="2" style="text-align:right">
                          <span id="ContentPlaceHolder1_Label9" class="font-weight-bold">__________________________(-)</span>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <span id="ContentPlaceHolder1_Label8" class="font-weight-bold">3</span>
                      </td>
                      <td>
                          <span id="ContentPlaceHolder1_Label10" class="font-weight-bold">Laba Kotor</span>
                      </td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px">
                          <span id="ContentPlaceHolder1_txtLabaKotor" class="font-weight-bold" style="color:Red;">0</span>
                      </td>
                  </tr>
                  
                  <tr>
                      <td colspan="4">&nbsp;</td>
                      <td colspan="2" style="text-align:right">
                          <span id="ContentPlaceHolder1_Label12" class="font-weight-bold">__________________________(+)</span>
                      </td>
                  </tr>
                  <tr>
                      <td>&nbsp;</td>
                      <td>
                          <span id="ContentPlaceHolder1_Label13" class="font-weight-bold">Jumlah</span>
                      </td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px"><span id="ContentPlaceHolder1_GTBiaya" class="font-weight-bold" style="color:Red;">0</span></td>
                  </tr>
                  <tr>
                      <td>
                          <span id="ContentPlaceHolder1_Label15" class="font-weight-bold">7</span>
                      </td>
                      <td>
                          <span id="ContentPlaceHolder1_Label14" class="font-weight-bold">Laba</span>
                      </td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px"><span id="ContentPlaceHolder1_GTLaba" class="font-weight-bold">0</span></td>
                  </tr>
                  
                  <tr>
                      <td colspan="4">&nbsp;</td>
                      <td colspan="2" style="text-align:right">
                          <span id="ContentPlaceHolder1_Label16" class="font-weight-bold">__________________________(-)</span>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <span id="ContentPlaceHolder1_Label17" class="font-weight-bold">9</span>
                      </td>
                      <td>
                          <span id="ContentPlaceHolder1_Label18" class="font-weight-bold">Laba Setelah Pajak</span>
                      </td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px"><span id="ContentPlaceHolder1_GTSetelahPajak" class="font-weight-bold" style="color:Red;">0</span></td>
                  </tr>
                  <tr>
                      <td>&nbsp;</td>
                      <td>
                          <span id="ContentPlaceHolder1_Label19" class="font-weight-bold">Dibulatkan Penuh</span>
                      </td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="2" style="text-align:right;padding-right:30px"><span id="ContentPlaceHolder1_GTRounding" class="font-weight-bold" style="color:Red;">0</span></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

                      </div>
  </section>
@endsection