<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pegawai = Pegawai::all();
        // return view('datapegawai', compact(
        //     'pegawai'
        //));
        $pegawai = DB::table('pegawai')
            ->join('roles', 'pegawai.id_roles', '=', 'roles.id_roles')
            ->select('pegawai.*', 'roles.*')
            ->get();
            //return $pegawai;
             return view('datapegawai', compact(
            'pegawai'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pegawai;
        return view('createpegawai', compact(
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
        $kodepegawai = DB::table('pegawai')
        ->max('id_pegawai');
            //->get();
        $urutan = (int) substr($kodepegawai, 3, 3);
        $urutan++;
 
        $huruf = "PGW";
        $kodepegawai = $huruf . sprintf("%03s", $urutan);
        //return $kodepegawai;
        $model = new Pegawai;        
        $model->id_pegawai = $kodepegawai;
        $model->pegawainama = $request->pegawainama;
        $model->pegawaiusername = $request->pegawaiusername;
        $model->pegawaipassword = $request->pegawaipassword;
        $model->pegawaialamat = $request->pegawaialamat;
        $model->pegawaihp = $request->pegawaihp;
        $model->pegawaimail = $request->pegawaimail;
        $model->id_roles = $request->id_roles;
        $model->save();
        return redirect('datapegawai');

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
        $model = Pegawai::find($id);
        return view('editpegawai', compact(
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
        $model = Pegawai::find($id);

        $model->pegawainama = $request->pegawainama;
        $model->pegawaiusername = $request->pegawaiusername;
        $model->pegawaipassword = $request->pegawaipassword;
        $model->pegawaialamat = $request->pegawaialamat;
        $model->pegawaihp = $request->pegawaihp;
        $model->pegawaimail = $request->pegawaimail;
        $model->id_roles = $request->id_roles;
        $model->save();
        return redirect('datapegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pegawai::find($id);
        $model->delete();
        return redirect('datapegawai');
        
    }
}
