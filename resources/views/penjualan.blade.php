@extends('layout.master')
@section('content')
<div class="card card-default">
    <table>
        <tr>
            <td id="ContentPlaceHolder1_btnValVsbl"><a href="{{ url('tambah-penjualan') }}" class="btn btn-primary">Tambah Invoice Pembelian</a></td>

            <td class="col-2">&nbsp;</td>
             <td>
                <span id="ContentPlaceHolder1_Label3" class="font-weight-bold">Tanggal</span>
                <select name="ctl00$ContentPlaceHolder1$DropDownList1" id="ContentPlaceHolder1_DropDownList1" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="12">13</option>
                                <option value="12">14</option>
                                <option value="12">15</option>
                                <option value="12">16</option>
                                <option value="12">17</option>
                                <option value="12">18</option>
                                <option value="12">19</option>
                                <option value="12">20</option>
                                <option value="12">21</option>
                                <option value="12">22</option>
                                <option value="12">23</option>
                                <option value="12">24</option>
                                <option value="12">25</option>
                                <option value="12">26</option>
                                <option value="12">27</option>
                                <option value="12">28</option>
                                <option value="12">29</option>
                                <option value="12">30</option>
                                <option value="12">31</option>
                            </select>
            </td>
            <td>
                <span id="" class="font-weight-bold">Bulan</span>
                <select name="" id="" class="form-control">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </td>
            <td>
                <span id="" class="font-weight-bold">Tahun</span>
                <select name="" id="" class="form-control">
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option selected="selected" value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2041">2041</option>
                    <option value="2042">2042</option>
                    <option value="2043">2043</option>
                    <option value="2044">2044</option>
                    <option value="2045">2045</option>
                    <option value="2046">2046</option>
                    <option value="2047">2047</option>
                    <option value="2048">2048</option>
                    <option value="2049">2049</option>
                    <option value="2050">2050</option>
                    <option value="2051">2051</option>
                    <option value="2052">2052</option>
                    <option value="2053">2053</option>
                    <option value="2054">2054</option>
                    <option value="2055">2055</option>
                    <option value="2056">2056</option>
                    <option value="2057">2057</option>
                    <option value="2058">2058</option>
                    <option value="2059">2059</option>
                    <option value="2060">2060</option>
                    <option value="2061">2061</option>
                    <option value="2062">2062</option>
                    <option value="2063">2063</option>
                    <option value="2064">2064</option>
                    <option value="2065">2065</option>
                    <option value="2066">2066</option>
                    <option value="2067">2067</option>
                    <option value="2068">2068</option>
                    <option value="2069">2069</option>
                    <option value="2070">2070</option>
                    <option value="2071">2071</option>
                </select>
            </td>
            <td>
                <span id="" class="font-weight-bold">Status Invoice</span>
                <select name="" id="" class="form-control">
                <option value=""></option>
                <option value="">-------------------</option>
                <option value="NORMAL">NORMAL</option>
                <option value="RETUR">RETUR</option>
            </select>
            </td>
            <td>
                <span id="" class="font-weight-bold">Sort By</span>
            <select name="" id="" class="form-control">
                <option value=""></option>
                <option value="">-------------------</option>
                <option value="a.NoInvoicePembelian">Invoice</option>
                <option value="a.JenisTagihan">Jenis Tagihan</option>
                <option value="a.TotalTagihanPembelian">Pembelian</option>
                <option value="a.TanggalPOPembelian">Tanggal Beli</option>
                <option value="a.TanggalPOJatuhTmpPembelian">Jatuh Tempo</option>
                <option value="b.SupplierName">Supplier</option>
                <option value="c.IvnStorage">Inventory</option>
            </select>
            </td>
            <td>
                <br />
               <input type="submit" name="" value="Search" id="" class="btn btn-dark" />
            </td>
        </tr>
    </table>
    <div class="card-body">
    <div class="table table-responsive table-light table-bordered table-hover">
    <table class="mb-0 table">
        <thead>
            <tr style="background-color:white">
                <th>No Invoice</th>
                <th>Nama Customer</th>
                <th>Tanggal Penjualan</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Jenis Tagihan</th>
                <th>Total Penjualan</th>
                <th>Status Invoice</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    </div>
</div>    
@endsection