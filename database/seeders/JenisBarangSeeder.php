<?php

namespace Database\Seeders;

use App\Models\JenisBarang;
use Illuminate\Database\Seeder;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_jenis' => 'Bahan pokok'],
            ['nama_jenis' => 'Plastik'],
            ['nama_jenis' => 'Minuman'],
            ['nama_jenis' => 'Daging'],
            ['nama_jenis' => 'Snack'],
        ];

        foreach ($data as $val) {
            JenisBarang::create($val);
        }
    }
}
