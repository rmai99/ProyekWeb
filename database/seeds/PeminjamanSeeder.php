<?php

use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create(); //import library faker
        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('peminjaman')->insert([
                'tgl_pinjam'=>$faker->dateTime,
                'tgl_kembali'=>$faker->dateTime,
                'id_buku' =>$faker->id_buku::all()->random()->id_buku,
                'id_anggota' =>$faker->randomDigitNotNull,
               
             
            ]);
        }
    }
}
