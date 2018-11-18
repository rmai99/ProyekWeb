<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPengembalian extends Model
{
  protected $table = "pengembalian";
  public function peminjaman()
  {
    return $this->belongsTo('App\ModelPeminjaman', 'id_pinjam');
  }
  public function buku()
  {
    return $this->belongsTo('App\ModelBuku', 'id_buku');
  }
  public function anggota()
  {
    return $this->belongsTo('App\ModelAnggota', 'id_anggota');
  }
}
