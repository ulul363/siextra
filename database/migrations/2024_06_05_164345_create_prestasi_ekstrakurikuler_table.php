<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_ekstrakurikuler', function (Blueprint $table) {
            $table->id(); // Menggunakan id_prestasi sebagai primary key
            $table->string('id_ekstrakurikuler');
            $table->string('nama_prestasi', 255);
            $table->text('deskripsi');
            $table->string('tahun_ajaran', 9);
            $table->timestamps();

            $table->foreign('id_ekstrakurikuler')->references('id')->on('ekstrakurikuler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_ekstrakurikuler');
    }
}
