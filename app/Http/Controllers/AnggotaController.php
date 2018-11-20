<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAnggota;
use App\ModelBuku;
use App\ModelPeminjaman;

class AnggotaController extends Controller
{
    public function index()
    {
      $datas = ModelAnggota::latest('created_at')->get();
      $buku = ModelBuku::all();
      $peminjaman = ModelPeminjaman::all();
      return view('DataAnggota',compact('datas','buku','peminjaman'));
    }

    public function create()
    {
        $datas = ModelAnggota::all();
        $buku = ModelBuku::all();
        $peminjaman = ModelPeminjaman::all();
        return view('tambah_anggota ',compact('datas','buku','peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new ModelAnggota();
      $data->nama_anggota = $request->nama_anggota;
      $data->nim = $request->nim;
      $data->fakultas = $request->fakultas;
      $data->prodi = $request->prodi;
      $data->alamat = $request->alamat;
      $data->jk = $request->jk;
      $data->no_telp = $request->no_telp;
      $data->save();
      return redirect()->route('DataAnggota.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelAnggota::where('id',$id)->get();
        return view('edit_anggota',compact('data'));

    }

  public function update(Request $request, $id){
    $data = ModelAnggota::where('id',$id)->first();
		$data->nama_anggota = $request->nama_anggota;
		$data->nim = $request->nim;
		$data->fakultas = $request->fakultas;
		$data->prodi = $request->prodi;
		$data->alamat = $request->alamat;
		$data->jk = $request->jk;
		$data->no_telp = $request->no_telp;
		$data->save();
		return redirect()->route('DataAnggota.index')->with('alert-success','Update Data Successfully!');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
	      $data = ModelAnggota::where('id',$id)->first();
	      $data->delete();
	      return redirect()->route('DataAnggota.index')->with('alert-success','Delete Data Successfully!');
}
}
