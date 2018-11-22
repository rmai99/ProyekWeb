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

Route::get('/', 'BaseController@index')->name('dashboard.index');

Route::resource('DataAnggota','AnggotaController');

Route::get('/tambah_anggota', function () {
    return view('tambah_anggota');
});

Route::resource('DataBuku','BukuController');

Route::resource('DataPeminjaman','PeminjamanController');

Route::resource('DataPengembalian','PengembalianController');


Route::post('DataPengembalian/store/{id}', 'PengembalianController@store')->name('DataPengembalian.store');
Route::resource('DataPengembalian','PengembalianController')->except('store');
