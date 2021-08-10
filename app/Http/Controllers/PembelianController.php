<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = DB::table('popembelianmst_tabel')
            ->leftjoin('supplier', 'supplier.id_supplier', '=', 'popembelianmst_tabel.id_supplier')
            ->leftjoin('gudang', 'gudang.id_gudang', '=', 'popembelianmst_tabel.id_gudang')
            ->select('popembelianmst_tabel.*', 'supplier.suppliernama','gudang.gudangnama')
            ->get();
            // return $barang;
             return view('pembelian', compact(
            'pembelian'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pembelian;
        return view('tambah-pembelian', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Pembelian;     

        $model->barangnama = $request->barangnama;
        $model->barangqty = '';
        $model->barangsatuan = 'KG';
        $model->id_supplier = $request->id_supplier;
        $model->barangstatus = 'ACTIVE';
        $model->barangjumlahbox = '';
        $model->barangtglbeli = '';
        $model->barangcategory = $request->barangcategory;
        //$model->barangitemcode = $kodeitem ;
        $model->id_gudang = $request->id_gudang;

        
        $model->save();
        return redirect('databarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
