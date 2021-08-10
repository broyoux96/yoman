<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use Illuminate\Support\Facades\DB;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gudang = Gudang::all();
        return view('datagudang', compact(
            'gudang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Gudang() ;
        
        return view('creategudang', compact(
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
        $kodegudang = DB::table('gudang')
        ->max('id_gudang');
            //->get();
        $urutan = (int) substr($kodegudang, 3, 3);
        $urutan++;
 
        $huruf = "GDG";
        $kodegudang = $huruf . sprintf("%03s", $urutan);
        //return $kodegudang;
        
        $model = new Gudang();        

        $model->id_gudang = $kodegudang;
        $model->gudangnama = $request->gudangnama;
        $model->gudangkapasitas = $request->gudangkapasistas;
        $model->gudangsisakapasitas = $request->gudangkapasistas; 
        $model->gudangstatus = 'ACTIVE'; 
        $model->save();
        return redirect('datagudang');
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
        $model = Gudang::find($id);
        return view('editgudang', compact(
            'model'
        ));
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
        $model = new Gudang;

        $model->gudangnama = $request->gudangnama;
        $model->gudangkapasitas = $request->gudangkapasistas;
        $model->gudangsisakapasitas = $request->gudangsisakapasitas;
        $model->save();
        return redirect('datagudang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Gudang::find($id);
        $model->delete();
        return redirect('datagudang');
    }
}
