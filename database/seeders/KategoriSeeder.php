<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'kategori'=>'Minuman',
            'nama'=>'Indomilk',
            'deskripsi'=>'Susu murni yang lezat dan bergizi yang 
            baik untuk anak anak serta baik untuk pertumbuhan'
        ];
        Kategori::create($data);
    }
}
