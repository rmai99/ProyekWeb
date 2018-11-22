<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelPengembalian;
use App\ModelBuku;
use App\ModelAnggota;

class PeminjamanController extends Controller
{

    public function index()
    {
      $peminjaman = ModelPeminjaman::latest('created_at')->with('buku','anggota')->get();
      return view('DataPeminjaman',compact('peminjaman'));
    }

    public function create()
    {
        $buku= ModelBuku::select('id','judul_buku')->get();
        $anggota= ModelAnggota::select('id','nama_anggota')->get();
        return view('tambah_peminjaman',compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
      $data = new ModelPeminjaman();
      $data->tgl_pinjam = $request->tgl_pinjam;
      $data->tgl_kembali = $request->tgl_kembali;
      $data->id_buku = $request->id_buku;
      $data->id_anggota = $request->id_anggota;
      $data->save();
     
      return redirect()->route('DataPeminjaman.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    public function show($id)
    {
        $user = ModelAnggota::find($data->id_anggoota);
    }

    public function edit($id)
    {
      $peminjaman = ModelPeminjaman::where('id',$id)->first();
      return view('tambah_pengembalian',compact('peminjaman'));
    }

    public function pengembalian($request, $id)
    {
      $data = new ModelPengembalian();
      $data->id_pinjam = $id;
      $data->tgl_terima = $request->tgl_terima;
      $data->save();
    }

    public function update(Request $request, $id)
    {
      $data = ModelPeminjaman::where('id',$id)->first();
      $data->tgl_pinjam = $request->tgl_pinjam;
      $data->tgl_kembali = $request->tgl_kembali;
      $data->id_buku = $request->id_buku;
      $data->id_anggota = $request->id_anggota;
      $data->save();
      $pinjam_id = $data->id;
      $this->pengembalian($request, $pinjam_id);
      return redirect()->route('DataPengembalian.index');
    }

    public function destroy($id)
    {
      $data = ModelPeminjaman::where('id',$id)->first();
      $data->delete();
      return redirect()->route('DataPeminjaman.index')->with('alert-success','Delete Data Successfully!');
    }
}
