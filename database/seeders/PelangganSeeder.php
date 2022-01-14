<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'pelanggan' => 'Dodi',
            'alamat' => 'Karanganyar',
            'telp' => '0892876712'
        ];
        //Pelanggan::create($data);
    }
}
