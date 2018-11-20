<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAnggota extends Model
{
    protected $table = "anggota";
    public function peminjaman()
    {
    	return $this->hasMany('App\ModelPeminjaman');
    }
}
