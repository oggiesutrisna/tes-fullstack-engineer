<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Pengarang;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $kategories = Kategori::factory()->count(10)->create();
        $pengarangs = Pengarang::factory()->count(10)->create();

        Buku::create([
            'title' => fake()->title,
            'category_id' => $kategories->random()->id,
            'author_id' => $pengarangs->random()->id,
            'year' => rand(2015, 2024),
        ]);
    }
}
