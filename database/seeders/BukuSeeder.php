<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('buku')->insert([
            [
                [
                    'judul' => 'Habis Gelap Terbitlah Terang',
                    'katagori' => 'buku',
                    'penerbit' => 'Gramedia',
                    'pengarang' => 'R.A. Kartini',
                    'jumlah' => 5,
                    
                ]
            ]
        ]);
    }
}
