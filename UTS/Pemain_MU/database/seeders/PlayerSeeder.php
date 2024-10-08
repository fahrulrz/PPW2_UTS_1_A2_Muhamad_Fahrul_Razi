<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Player::create([
                'nama_pemain' => fake()->sentence(3),
                'no_punggung' => fake()->numberBetween(1, 99),
                'posisi' => fake()->sentence(3),
            ]);
        }
    }
}
