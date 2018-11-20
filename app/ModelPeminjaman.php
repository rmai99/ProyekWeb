<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table = "peminjaman";
    public function buku()
    {
    	return $this->belongsTo('App\ModelBuku', 'id_buku');
    }
    public function anggota()
    {
    	return $this->belongsTo('App\ModelAnggota', 'id_anggota');
    }
    public function pengembalian()
    {
       return $this->hasOne('App\ModelPengembalian');
     }
}
