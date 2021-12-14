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

Route::get('/', function () {
    return view('welcome');
});
Route::get('praktikum1', function () {
    return view('prak1web');
});
Route::get('tugas4', function () {
    return view('tugas4web');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ets', 'ViewController@showEts');
Route::get('tugasphp', 'ViewController@showTugasphp');
Route::POST('hasilluas', 'ViewController@showHasilform');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route CRUD
Route::get('/mutasi','MutasiController@index');

Route::get('/mutasi/tambah','MutasiController@tambah');

Route::post('/mutasi/store','MutasiController@store');

Route::get('/mutasi/edit/{id}','MutasiController@edit');

Route::post('/mutasi/update','MutasiController@update');

Route::get('/mutasii/hapus/{id}','MutasiiController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD
Route::get('/mouse','MouseController@index');
Route::get('/mouse/tambah','MouseController@tambah');
Route::post('/mouse/store','MouseController@store');
Route::get('/mouse/edit/{id}','MouseController@edit');
Route::post('/mouse/update','MouseController@update');
Route::get('/mouse/hapus/{id}','MouseController@hapus');
Route::get('/mouse/cari','MouseController@cari');
Route::get('/mouse/view/{id}','MouseController@detail');
