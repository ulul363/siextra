<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiSiswaTable extends Migration
{
    public function up()
    {
        Schema::create('prestasi_siswa', function (Blueprint $table) {
            $table->id('id_prestasisiswa');
            $table->integer('nis');
            $table->string('id_ekstrakurikuler');
            $table->text('deskripsi');
            $table->string('tahun_ajaran', 9);
            $table->string('berkas');
            $table->timestamps();

            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade');
            $table->foreign('id_ekstrakurikuler')->references('id_ekstrakurikuler')->on('ekstrakurikuler')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasi_siswa');
    }
}
