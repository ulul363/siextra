<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_ekstrakurikuler', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->time('waktu');
            $table->string('lokasi');
            $table->string('id_ekstrakurikuler');
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->foreign('id_ekstrakurikuler')->references('id_ekstrakurikuler')->on('ekstrakurikuler');
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
        Schema::dropIfExists('jadwal_ekstrakurikuler');
    }
}
