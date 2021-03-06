<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDitujukanUntuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ditujukan_untuks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pengurban_id');
            $table->index('pengurban_id');
            $table->unsignedInteger('user_id');
            $table->index('user_id');
            $table->string('nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ditujukan_untuks');
    }
}
