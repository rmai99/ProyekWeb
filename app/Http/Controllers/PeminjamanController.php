<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelBuku;
use App\ModelAnggota;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datas = ModelAnggota::all();
      $buku = ModelBuku::all();
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
      $datas = ModelAnggota::all();
      $buku = ModelBuku::all();
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
     * Display the specified resource.
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
      $peminjaman = ModelAnggota::where('id',$id)->get();
      return view('edit_peminjaman',compact('peminjaman'));
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
        //
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
