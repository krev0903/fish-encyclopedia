<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fish_encyclopedias', function (Blueprint $table) {
            $table->integer('food_id');
            $table->integer('difficulty_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fish_encyclopedias', function (Blueprint $table) {
            $table->dropColumn('food_id');
            $table->dropColumn('difficulty_id');
        });
    }
};
