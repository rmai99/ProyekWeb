<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pinjam');
            $table->foreign('id_pinjam')->references('id')->on('peminjaman')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl_terima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian');
    }
}
