<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelPengembalian;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $peminjaman = ModelPeminjaman::latest('created_at')->with('buku','anggota')->get();
      return view('DataPeminjaman',compact('peminjaman','buku','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $peminjaman = ModelPeminjaman::latest('created_at')->with('buku','anggota')->get();
        return view('tambah_peminjaman',compact('peminjaman','buku','datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specif ied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = ModelAnggota::find($data->id_anggoota);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = ModelPeminjaman::where('id',$id)->first();
      $data->delete();
      return redirect()->route('DataPeminjaman.index')->with('alert-success','Delete Data Successfully!');
    }
}
