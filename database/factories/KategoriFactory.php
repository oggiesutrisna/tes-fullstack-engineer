<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class KategoriFactory extends Factory
{
    protected $model = Kategori::class;

    public function definition(): array
    {
        return [
            'nama_kategori' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
