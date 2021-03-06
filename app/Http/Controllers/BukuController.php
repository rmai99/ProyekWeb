<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBuku;
use App\ModelAnggota;
use App\ModelPeminjaman;

class BukuController extends Controller
{
    public function index()
    {
      $buku = ModelBuku::all();
      return view('DataBuku',compact('buku'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $buku = ModelBuku::all();
      return view('tambah_buku ',compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new ModelBuku();
      $data->isbn = $request->isbn;
      $data->judul_buku = $request->judul_buku;
      $data->tahun_terbit = $request->tahun_terbit;
      $data->pengarang = $request->pengarang;
      $data->penerbit = $request->penerbit;
      $data->satuan = $request->satuan;
      $data->save();
      return redirect()->route('DataBuku.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $buku = ModelBuku::all();
      $peminjaman = ModelPeminjaman::all();
      $datas = ModelBuku::where('id',$id)->get();
      return view('edit_buku',compact('datas','buku','peminjaman'));
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
      $data = ModelBuku::where('id',$id)->first();
      $data->isbn = $request->isbn;
      $data->judul_buku = $request->judul_buku;
      $data->tahun_terbit = $request->tahun_terbit;
      $data->pengarang = $request->pengarang;
      $data->penerbit = $request->penerbit;
      $data->satuan = $request->satuan;
      $data->save();
      return redirect()->route('DataBuku.index')->with('alert-success','Update Data Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = ModelBuku::where('id',$id)->first();
      $data->delete();
      return redirect()->route('DataBuku.index')->with('alert-success','Delete Data Successfully!');
    }
}
