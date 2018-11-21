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
           DB::table('buku')->insert([
       'id'=>'1',
               'isbn'=>'999',
               'judul_buku' =>'Dilan 1990',
               'tahun_terbit' =>'Tahun 2015',
               'pengarang' => 'Pidi Baiq',
               'penerbit' => 'Pastel Books',
               'satuan'=>'01',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'2',
               'isbn'=>'379',
               'judul_buku' =>'Robin Hood',
               'tahun_terbit' =>'Tahun 2002',
               'pengarang' => 'Paul Creswick',
               'penerbit' => 'Elex Media',
               'satuan'=>'1',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'3',
               'isbn'=>'674',
               'judul_buku' =>'The Missing Rose',
               'tahun_terbit' =>'Mei 2009',
               'pengarang' => 'Serdar Oskan',
               'penerbit' => 'Gramedia',
               'satuan'=>'2',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'4',
               'isbn'=>'030',
               'judul_buku' =>'Musashi',
               'tahun_terbit' =>'Januari 2001',
               'pengarang' => 'Eiji Yoshikawa',
               'penerbit' => 'Gramedia',
               'satuan'=>'1',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'5',
               'isbn'=>'289',
               'judul_buku' =>'Ronggeng Dukuh',
               'tahun_terbit' =>'November 2011',
               'pengarang' => 'Ahmad Tohari',
               'penerbit' => 'Gramedia',
               'satuan'=>'1',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'6',
               'isbn'=>'375',
               'judul_buku' =>'The BFG, Raksasa',
               'tahun_terbit' =>'Tahun 2010',
               'pengarang' => 'Roald Dahl',
               'penerbit' => 'Gramedia Pustaka',
               'satuan'=>'3',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'7	',
               'isbn'=>'273',
               'judul_buku' =>'Hamlet',
               'tahun_terbit' =>'Tahun 1990',
               'pengarang' => 'William Sheakspear',
               'penerbit' => 'Gramedia Pustaka',
               'satuan'=>'1',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
     DB::table('buku')->insert([
       'id'=>'8',
               'isbn'=>'789',
               'judul_buku' =>'Romeo & Juliet',
               'tahun_terbit' =>'Tahun 1992',
               'pengarang' => 'William Sheakspear',
               'penerbit' => 'Gramedia Pustaka',
               'satuan'=>'3',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);

     DB::table('buku')->insert([
       'id'=>'9',
               'isbn'=>'567',
               'judul_buku' =>'Macbet',
               'tahun_terbit' =>'Tahun 1995',
               'pengarang' => 'William Sheakspear',
               'penerbit' => 'Gramedia Pustaka',
               'satuan'=>'1',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);

     DB::table('buku')->insert([
       'id'=>'10',
               'isbn'=>'265',
               'judul_buku' =>'Harry Potter and the Philosophers Stone',
               'tahun_terbit' =>'Juni 1999',
               'pengarang' => 'J.K Rowling ',
               'penerbit' => 'Gramedia Pustaka',
               'satuan'=>'3',
       'created_at' => date("Y-m-d H:i:s"),
       'updated_at' => date("Y-m-d H:i:s"),
           ]);
       }
   }
