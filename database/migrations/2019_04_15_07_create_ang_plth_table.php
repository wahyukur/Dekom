<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngPlthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ang_plth', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('period_id'); // foreign key
            $table->unsignedInteger('kegiatan_id'); // foreign key
            $table->string('biaya');
            $table->string('jumlah');
            $table->string('check');            
            $table->timestamps();
            // Foreign Key
            $table->foreign('period_id')->references('id')->on('period');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ang_plth');
    }
}
