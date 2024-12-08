<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Pengarang;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BukuFactory extends Factory
{
    protected $model = Buku::class;

    public function definition(): array
    {
        return [
            'nama_buku' => $this->faker->word(),
            'tahun' => $this->faker->year(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'kategori_id' => Kategori::factory(),
            'pengarang_id' => Pengarang::factory(),
        ];
    }
}
