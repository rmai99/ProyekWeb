<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = "buku";
    public function peminjaman()
    {
    	return $this->hasMany('App\ModelPeminjaman');
    }
}
