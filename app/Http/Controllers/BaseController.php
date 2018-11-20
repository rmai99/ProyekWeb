<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelBuku;
use App\ModelAnggota;

class BaseController extends Controller
{
  public function index()
  {
    $datas = ModelAnggota::all();
    $buku = ModelBuku::all();
    $peminjaman = ModelPeminjaman::all();
    return view('base',compact('buku', 'datas', 'peminjaman'));
  }
}
