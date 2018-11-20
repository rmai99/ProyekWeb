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
}
