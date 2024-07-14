<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create(['name' => '人口飼料']);
        Food::create(['name' => '生餌']);
        Food::create(['name' => '冷凍餌']);
    }
}
