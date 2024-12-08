<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Buku::factory(150)->create();

        User::factory()->create([
            'name' => 'a',
            'email' => 'a@a.com',
            'password' => 'a'
        ]);


    }
}
