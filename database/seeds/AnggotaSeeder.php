<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{

    public function run()
    {
      $faker = Faker\Factory::create(); //import library faker
        $limit = 20; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('anggota')->insert([
                'nama_anggota'=>$faker->name,
                'nim' => $faker->name,
                'Fakultas' => $faker->name,
                'Prodi' => $faker->name,
                'alamat' => $faker->address,
                'jk'=>$faker->name,
                'no_telp'=>$faker->phoneNumber,
            ]);
        }
    }
}
