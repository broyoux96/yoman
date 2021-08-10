<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $barang = Barang::all();
        // return view('databarang', compact(
        //     'barang'
        // ));
        $barang = DB::table('barang')
            ->leftjoin('supplier', 'supplier.id_supplier', '=', 'barang.id_supplier')
            ->leftjoin('gudang', 'gudang.id_gudang', '=', 'barang.id_gudang')
            ->select('barang.*', 'supplier.suppliernama','gudang.gudangnama')
            ->get();
            // return $barang;
             return view('databarang', compact(
            'barang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //kode barang code
        $kodebarang = DB::table('barang')
        ->max('id_barang');
            //->get();
        $urutan = (int) substr($kodebarang, 3, 3);
        $urutan++;
 
        $huruf = "BRG";
        $kodebarang = $huruf . sprintf("%03s", $urutan);
        //return $kodebarang;
        //kode barang beres
        //kode item mulai
        // $kodeitem = DB::table('barang')
        // ->max('barangitemcode');
        //     //->get();
        // $urutan = (int) substr($kodeitem, 3, 3);
        // $urutan++;
 
        // $huruf = "itemcode";
        // $kodeitem = $huruf . sprintf("%03s", $urutan);
        //kode item end
        //return $kodeitem;

        $model = new Barang;     

        $model->id_barang = $kodebarang;
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
    public function tampildatabarang()
    {
        //
        // $barang = Barang::all();
        // return view('databarang', compact(
        //     'barang'
        // ));
        //kode barang code
        $kodebarang = DB::table('barang')
        ->max('id_barang');
            //->get();
        $urutan = (int) substr($kodebarang, 3, 3);
        $urutan++;
 
        $huruf = "BRG";
        $kodebarang = $huruf . sprintf("%03s", $urutan);
        //return $kodebarang;
        //kode barang beres
        //kode item mulai
        // $kodeitem = DB::table('barang')
        // ->max('barangitemcode');
        //     //->get();
        // $urutan = (int) substr($kodeitem, 3, 3);
        // $urutan++;
 
        // $huruf = "itemcode";
        // $kodeitem = $huruf . sprintf("%03s", $urutan);
        //kode item end
        
            
        $supplier = DB::table('supplier')->get();
        $gudang = DB::table('gudang')->get();
            //  return $supplier ;
             return view('tambah-databarang', compact(
            'kodeitem','supplier','gudang'
        ));
    }
    public function tampildatabrgolahan()
    {
        //
        // $barang = Barang::all();
        // return view('databarang', compact(
        //     'barang'
        // ));
        //kode barang code
        $kodebarang = DB::table('barang')
        ->max('id_barang');
            //->get();
        $urutan = (int) substr($kodebarang, 3, 3);
        $urutan++;
 
        $huruf = "BRG";
        $kodebarang = $huruf . sprintf("%03s", $urutan);
        //return $kodebarang;
        //kode barang beres
        //kode item mulai
        // $kodeitem = DB::table('barang')
        // ->max('barangitemcode');
        //     //->get();
        // $urutan = (int) substr($kodeitem, 3, 3);
        // $urutan++;
 
        // $huruf = "itemcode";
        // $kodeitem = $huruf . sprintf("%03s", $urutan);
        //kode item end
            
        $supplier = DB::table('supplier')->get();
        $gudang = DB::table('gudang')->get();
            //  return $supplier ;
             return view('tambah-databarangolahan', compact(
            'kodebarang','supplier','gudang'
        ));
    }

    public function ambilsupplier($id)
    {
        $gudang = DB::table('gudang')
        ->where('id_gudang', '=', $id)
        ->get();
        return $gudang;
    }

    public function ambilbarang($id_gdg, $id_spl)
    {
        $dtbarang = DB::table('barang')
        ->where('id_gudang', '=', $id_gdg)
        ->where('id_supplier', '=',$id_spl)
        ->get();
        return $dtbarang;
    }
    
}
