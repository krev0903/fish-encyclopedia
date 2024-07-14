<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\difficulty;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Difficulty::create(['name' => '簡単']);
        Difficulty::create(['name' => 'やや難しい']);
        Difficulty::create(['name' => '難しい']);
    }
}
