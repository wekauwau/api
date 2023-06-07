<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'jenis_barang_id' => 1,
                'nama' => 'Beras 1kg',
                'harga' => 15000,
                'stok' => 100,
            ],
            [
                'jenis_barang_id' => 2,
                'nama' => 'Plastik besar',
                'harga' => 10000,
                'stok' => 100,
            ],
            [
                'jenis_barang_id' => 3,
                'nama' => 'Aqua',
                'harga' => 5000,
                'stok' => 200,
            ],
            [
                'jenis_barang_id' => 4,
                'nama' => 'Daging sapi',
                'harga' => 50000,
                'stok' => 50,
            ],
            [
                'jenis_barang_id' => 5,
                'nama' => 'Taro',
                'harga' => 3000,
                'stok' => 200,
            ],
        ];

        foreach ($data as $val) {
            Barang::create($val);
        }
    }
}
