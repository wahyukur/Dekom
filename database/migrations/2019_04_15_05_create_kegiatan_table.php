<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jenis_id'); // foreign key
            $table->string('nama_keg');
            $table->string('tempat');
            $table->string('penyelengara');
            $table->string('dihadiri');
            $table->string('tgl_mulai');
            $table->string('tgl_akhir');
            $table->string('keterangan');
            $table->string('check');
            $table->timestamps();
            $table->foreign('jenis_id')->references('id')->on('j_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
