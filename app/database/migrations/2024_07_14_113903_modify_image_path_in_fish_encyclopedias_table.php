<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyImagePathInFishEncyclopediasTable extends Migration
{
    public function up()
    {
        Schema::table('fish_encyclopedias', function (Blueprint $table) {
            $table->string('image_path')->change();
        });
    }

    public function down()
    {
        Schema::table('fish_encyclopedias', function (Blueprint $table) {
            $table->bigInteger('image_path')->change();
        });
    }
}
