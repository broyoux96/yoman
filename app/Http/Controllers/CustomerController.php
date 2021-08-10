<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Symfony\Component\VarDumper\Caster\CutStub;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = Customer::all();
        return view('datacustomer', compact(
            'customer'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Customer ;
        return view('createcustomer', compact(
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
        $kodecustomer = DB::table('customer')
        ->max('id_customer');
            //->get();
        $urutan = (int) substr($kodecustomer, 3, 3);
        $urutan++;
 
        $huruf = "CUS";
        $kodecustomer = $huruf . sprintf("%03s", $urutan);
        //return $kodecustomer;
        $model = new Customer;        
        $model->id_customer = $kodecustomer;

        $model->customernama = $request->customernama;
        $model->customeralamat = $request->customeralamat;
        $model->customerhp = $request->customerhp;
        $model->customeremail = $request->customeremail;
        $model->save();
        return redirect('datacustomer');
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
        $model = Customer::find($id);
        return view('editcustomer', compact(
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
        $model = Customer::find($id);

        $model->customernama = $request->customernama;
        $model->customeralamat = $request->customeralamat;
        $model->customerhp = $request->customerhp;
        $model->customeremail = $request->customeremail;
        $model->save();
        return redirect('datacustomer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Customer::find($id);
        $model->delete();
        return redirect('datacustomer');
    }
}
