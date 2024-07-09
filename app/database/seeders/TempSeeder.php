<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Temp;
class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Temp::create(['name'=>'10-18']);
        Temp::create(['name'=>'13-20']);
        Temp::create(['name'=>'16-23']);
        Temp::create(['name'=>'18-25']);
        Temp::create(['name'=>'23-27']);
        Temp::create(['name'=>'24-28']);
        Temp::create(['name'=>'25-29']);
    }
}
