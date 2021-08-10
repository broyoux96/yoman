<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangOlahanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembelianDtlController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Pengolahan Barang
Route::view('/databarang', 'databarang');
Route::resource('databarang', BarangController::class);
Route::view('/tambah-databarangolahan', 'tambah-databarangolahan');
Route::resource('databarangolahan', BarangOlahanController::class);
Route::resource('tambah-databarang', BarangController::class);
Route::get('tampildatabrg',[BarangController::class, 'tampildatabarang']);
Route::get('tampildatabrgolahan',[BarangController::class, 'tampildatabrgolahan']);
Route::post('tampildatabrg', [BarangController::class, 'store']);


//pengolahan pegawai
Route::view('/createpegawai', 'createpegawai');
Route::resource('datapegawai', PegawaiController::class);


//pengolahan customer
Route::view('/createcustomer', 'createcustomer');
Route::resource('datacustomer', CustomerController::class);



// Pengolahan supplier
Route::view('/createsupplier', 'createsupplier');
Route::resource('datasupplier', SupplierController::class);


// pengolahan gudang
Route::view('/datagudang', 'datagudang');
Route::resource('datagudang', GudangController::class);
Route::view('/creategudang', 'creategudang');


//pengolahan pembelian
Route::view('/pembelian', 'pembelian');
Route::resource('pembelian', PembelianController::class);
Route::view('/tambah-pembelian', 'tambah-pembelian');
Route::resource('tambah-pembelian', PembelianDtlController::class);
Route::get('ambilsupplier/{id}',[BarangController::class ,'ambilsupplier']);
Route::get('ambilbarang/{id_gdg}/{id_spl}',[BarangController::class ,'ambilbarang']);

//Route::get('tampildatabrg',[PembelianDtlController::class, 'tampildatabarang']);


//pengolahan penjualan
Route::view('/penjualan', 'penjualan');
Route::view('/tambah-penjualan', 'tambah-penjualan');


//pengolahan biaya tambahan
Route::view('/laporanpenjualan', 'laporanpenjualan');
Route::view('/biayatambahan', 'biayatambahan');
Route::view('/tambah-biayatambahan', 'tambah-biayatambahan');






//Route::get('tampildatabarangolahan',[BarangOlahanController::class, 'tampildatabarangolahan']);









//
Route::view('/dashboard', 'dashboard');




// Route::view('/tambah-databarang', 'tambah-databarang');




// Route::delete('barang/(id)',[BarangController::class, 'destroy']);


//route get => datapegawai=> index
//route get => datapegawai/create=> create
//route post => datapegawai=> store
//route get => datapegawai/(id)=> show
//route get => datapegawai/(id)=> update
//route delete => datapegawai=> delete
