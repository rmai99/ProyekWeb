<?php

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
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
            DB::table('buku')->insert([
                'isbn'=>$faker->randomDigitNotNull,
                'judul_buku' => $faker->name,
                'tahun_terbit' => $faker->year($max = 'now'),
                'pengarang' => $faker->name,
                'penerbit' => $faker->name,
                'satuan'=>$faker->randomDigitNotNull,
            ]);
        }
    }
}
