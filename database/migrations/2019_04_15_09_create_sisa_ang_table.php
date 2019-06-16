<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisaAngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisa_ang', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('angplth_id')->nullable; // foreign key
            $table->unsignedInteger('angspd_id')->nullable; // foreign key
            $table->unsignedInteger('period_id'); // foreign key
            $table->integer('sisa_ang');
            $table->integer('jml_ang_now');
            $table->string('check');
            $table->timestamps();
            // Foreign Key
            $table->foreign('angplth_id')->references('id')->on('ang_plth');
            $table->foreign('angspd_id')->references('id')->on('ang_spd');
            $table->foreign('period_id')->references('id')->on('period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sisa_ang');
    }
}
