<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAnggota;

class AnggotaController extends Controller
{
    public function index()
    {
      $data = ModelAnggota::all();
      return view('DataAnggota',compact('data'));
    }

    public function create()
    {
        return view('DataAnggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
		$data->id = $request->id;
		$data->nama_anggota = $request->nama_anggota;
		$data->nim = $request->nim;
		$data->fakultas = $request->fakultas;
		$data->prodi = $request->prodi;
		$data->alamat = $request->alamat;
		$data->jk = $request->jk;
		$data->no_telp = $request->no_telp;
		$data->save();
		return redirect()->route('anggota.index')->with('alert-success','Update Data Successfully!');
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
	return redirect()->route('anggota.index')->with('alert-success','Delete Data Successfully!');
}
}
