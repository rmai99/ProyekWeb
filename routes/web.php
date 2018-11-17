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
Route::get('/DataBuku', function () {
    return view('DataBuku');
});
Route::get('/DataAnggota', function () {
    return view('DataAnggota');
});
Route::get('/DataTransaksi', function () {
    return view('DataTransaksi');
});
