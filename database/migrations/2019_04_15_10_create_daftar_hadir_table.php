<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarHadirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hadir', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); // foreign key
            $table->string('masuk')->nullable;
            $table->string('keluar')->nullable;
            $table->string('keterangan')->nullable;
            $table->string('check');
            $table->timestamps();
            // Foreign Key
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_hadir');
    }
}
