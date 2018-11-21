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
Route::get('/', 'BaseController@index');

Route::resource('DataAnggota','AnggotaController');

Route::resource('edit_anggota','AnggotaController');

Route::get('/tambah_anggota', function () {
    return view('tambah_anggota');
});

Route::resource('DataBuku','BukuController');

Route::resource('DataPeminjaman','PeminjamanController');

Route::resource('DataPengembalian','PengembalianController');
