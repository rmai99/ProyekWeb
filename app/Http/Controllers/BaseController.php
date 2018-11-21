<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelBuku;
use App\ModelAnggota;
use App\ModelPengembalian;

class BaseController extends Controller
{
  public function index()
  {
    $datas = ModelAnggota::all();
    $buku = ModelBuku::all();
    $peminjaman = ModelPeminjaman::all();
    $pengembalian = ModelPengembalian::all();
    return view('welcome',compact('buku', 'datas', 'peminjaman','pengembalian'));
  }
}
