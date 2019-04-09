<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// barang
Route::get('/admin/barang', 'BarangController@index');
Route::post('/admin/savebarang', 'BarangController@savebarang');
Route::post('/admin/updatebarang', 'BarangController@updatebarang');
Route::get('/admin/edit/{id}', 'BarangController@edit');
Route::get('/admin/delete/{id}', 'BarangController@delete');

// petugas
Route::get('/admin/petugas', 'PetugasController@index');
Route::post('/admin/savepetugas', 'PetugasController@savepetugas');
Route::post('/admin/updatepetugas', 'PetugasController@updatepetugas');
Route::get('/admin/editpetugas/{id}', 'PetugasController@edit');
Route::get('/admin/deletepetugas/{id}', 'PetugasController@delete');

// Distributor
Route::get('/admin/distributor', 'DistributorController@index');
Route::post('/admin/savedistributor', 'DistributorController@savedistributor');
Route::post('/admin/updatedistributor', 'DistributorController@updatedistributor');
Route::get('/admin/editdistributor/{id}', 'DistributorController@edit');
Route::get('/admin/deletedistributor/{id}', 'DistributorController@delete');

// Jenis
Route::get('/admin/jenis', 'JenisController@index');
Route::post('/admin/savejenis', 'JenisController@savejenis');
Route::post('/admin/updatejenis', 'JenisController@updatejenis');
Route::get('/admin/editjenis/{id}', 'JenisController@edit');
Route::get('/admin/deletejenis/{id}', 'JenisController@delete');

Route::get('/', function () {
    return view('admin.dashboard');
});