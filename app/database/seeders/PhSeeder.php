<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ph;

class PhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ph::create(['name'=>'5.5-6.5']);
        Ph::create(['name'=>'6.0-7.0']);
        Ph::create(['name'=>'6.5-7.5']);
        Ph::create(['name'=>'7.0-8.0']);
        Ph::create(['name'=>'7.5-8.5']);
    }
}
