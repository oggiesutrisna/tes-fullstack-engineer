<?php

namespace Database\Factories;

use App\Models\Pengarang;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PengarangFactory extends Factory
{
    protected $model = Pengarang::class;

    public function definition(): array
    {
        return [
            'nama_pengarang' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
