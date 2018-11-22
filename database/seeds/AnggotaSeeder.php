<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{

    public function run()
    {
        DB::table('anggota')->insert([
       'id'=>'30',
               'nama_anggota'=>'Dzakwan',
               'nim' =>'17/415511/SV/56721',
               'fakultas' =>'KKMK ',
               'prodi' => 'Pendidikan Dokter',
               'alamat' => 'Kediri',
               'jk' => 'L',
               'no_telp' => '089613954111',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     
        }
    }
