<?php

use Illuminate\Support\Facades\Route;

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

// jika langsung ke view
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
// __________________________________________________
// jual
Route::get('/jual', 'JualController@index');
// pdf jual
Route::get('/jual/cetak_pdf', 'JualController@cetak_pdf');
// excel jual
Route::get('/jual/export_excel', 'JualController@export_excel');
// edit jual / update
Route::get('/jual/edit/{id_barang}', 'JualController@edit');
Route::post('/jual/update', 'JualController@update');
// tambah
Route::get('/jual/create', 'JualController@create');
Route::post('/jual/store', 'JualController@store');
// hapus
Route::get('/jual/delete/{id_barang}', 'JualController@delete');
// __________________________________________________

// suplier
Route::get('/suplier', 'SuplierController@index');
// pdf suplier
Route::get('/suplier/cetak_pdf', 'SuplierController@cetak_pdf');
// excel suplier
Route::get('/suplier/export_excel', 'SuplierController@export_excel');
// edit suplier
Route::get('suplier/edit/{id_suplier}', 'SuplierController@edit');
Route::post('suplier/update', 'SuplierController@update');
// tambah
Route::get('suplier/create', 'SuplierController@create');
Route::post('suplier/store', 'SuplierController@store');
// hapus
route::get('suplier/delete/{id_suplier}', 'SuplierController@delete');
// __________________________________________________
// pembeli
Route::get('/pembeli', 'PembeliController@index');
// pdf pembeli
Route::get('/pembeli/cetak_pdf', 'PembeliController@cetak_pdf');
// Excel pembeli
Route::get('pembeli/export_excel', 'PembeliController@export_excel');
// edit pembeli
Route::get('pembeli/edit/{id_pembeli}', 'PembeliController@edit');
Route::post('pembeli/update', 'PembeliController@update');
// tambah
Route::get('pembeli/create', 'PembeliController@create');
Route::post('pembeli/store', 'PembeliController@store');
// hapus
Route::get('pembeli/delete/{id_pembeli}', 'PembeliController@delete');
// __________________________________________________
// transaksi
Route::get('/transaksi', 'TransaksiController@index');
// pdf transaksi
Route::get('/transaksi/cetak_pdf', 'TransaksiController@cetak_pdf');
// Excel transaksi
Route::get('transaksi/export_excel', 'TransaksiController@export_excel');
// edit transaksi

// tambah
Route::get('transaksi/create', 'TransaksiController@create');
Route::post('transaksi/store', 'TransaksiController@store');
// hapus
Route::get('transaksi/delete/{id_transaksi}', 'TransaksiController@delete');