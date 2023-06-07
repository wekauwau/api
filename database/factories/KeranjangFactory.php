<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keranjang>
 */
class KeranjangFactory extends Factory
{
    function get_ids($model)
    {
        $ids = $model::pluck('id')->all();
        $random_id = $this->faker->randomElement($ids);

        return $random_id;
    }

    public function definition(): array
    {
        return [
            'pelanggans_id' => $this->get_ids(Pelanggan::class),
            'barangs_id' => $this->get_ids(Barang::class),
            'jumlah' => fake()->randomNumber(1, true),
        ];
    }
}
