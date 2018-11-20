<?php

use Illuminate\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create(); //import library faker
      $limit = 20; //batasan berapa banyak data

      for ($i = 0; $i < $limit; $i++) {
          DB::table('pengembalian')->insert([
              'id_pinjam'=>$faker->numberBetween($min = 1, $max =20),
              'tgl_terima'=>$faker->dateTime,
          ]);
      }
    }
}
