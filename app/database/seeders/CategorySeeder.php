<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 最初の挿入
        // Category::create(['name'=>'淡水魚']);
        // Category::create(['name'=>'海水魚']);
        // Category::create(['name'=>'汽水魚']);

        // データの更新
        Category::where('id', 1)->update(['name' => '淡水']);
        Category::where('id', 2)->update(['name' => '海水']);
        Category::where('id', 3)->update(['name' => '汽水']);

        // 新しいデータの挿入（必要な場合）
        // Category::create(['name'=>'淡水魚']);
        // Category::create(['name'=>'海水魚']);
        // Category::create(['name'=>'汽水魚']);
    }
}
