<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supplier = Supplier::all();
        return view('datasupplier', compact(
            'supplier'
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Supplier();
        return view('createsupplier', compact(
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
        $kodesupplier = DB::table('supplier')
        ->max('id_supplier');
            //->get();
        $urutan = (int) substr($kodesupplier, 3, 3);
        $urutan++;
 
        $huruf = "SUP";
        $kodesupplier = $huruf . sprintf("%03s", $urutan);
        //return $kodesupplier;
        $model = new Supplier;

        $model->id_supplier = $kodesupplier;
        $model->suppliernama = $request->suppliernama;
        $model->supplieralamat = $request->supplieralamat;
        $model->supplierhp = $request->supplierhp;
        $model->supplieremail = $request->supplieremail;
        $model->save();
        return redirect('datasupplier');
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
        $model = Supplier::find($id);
        return view('editsupplier', compact(
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
        $model = Supplier::find($id);

        $model->suppliernama = $request->suppliernama;
        $model->supplieralamat = $request->supplieralamat;
        $model->supplierhp = $request->supplierhp;
        $model->supplieremail = $request->supplieremail;
        $model->save();
        return redirect('datasupplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Supplier::find($id);
        $model->delete();
        return redirect('datasupplier');
    }
}
