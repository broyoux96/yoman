<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembelianDtl;
use Illuminate\Support\Facades\DB;


class PembelianDtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $pembeliandtl = DB::table('popembeliandtl_tabel')
            ->leftjoin('barang', 'barang.id_barang', '=', 'popembeliandtl_tabel.id_barang')
            ->leftjoin('popembelianmst_tabel', 'popembelianmst_tabel.id_popembelianmst', '=', 'popembeliandtl_tabel.id_popembelianmst')
            ->select('popembeliandtl_tabel.*', 'barang.*','popembelianmst_tabel.*')
            ->get();

            $supplier= DB::table('supplier')->get();
            $gudang= DB::table('gudang')->get();
            $barang= DB::table('barang')->get();

            
            // return $pembeliandtl;
             return view('tambah-pembelian', compact(
            'pembeliandtl', 'supplier','gudang','barang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new PembelianDtl();
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
        //
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
    // public function tampildatabarang()
    // {
    //     $pembeliandtl = DB::table('popembeliandtl_tabel')->get();  
    //     $supplier = DB::table('supplier')->get();
    //     $gudang = DB::table('gudang')->get();
    //          return $pembeliandtl ;
    //     //      return view('tambah-databarang', compact(
    //     //     'kodeitem','supplier','gudang'
    //     // ));
    // }
}
