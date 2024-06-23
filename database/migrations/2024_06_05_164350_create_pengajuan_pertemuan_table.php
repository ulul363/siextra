<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanPertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_pertemuan', function (Blueprint $table) {
            $table->string('id_jadwal')->primary();
            $table->integer('nis');
            $table->unsignedBigInteger('nip_pembina');
            $table->datetime('tanggal_pengajuan');
            $table->enum('status', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');
            $table->timestamps();

            $table->foreign('nis')->references('nis')->on('siswa');
            $table->foreign('nip_pembina')->references('nip_pembina')->on('pembina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_pertemuan');
    }
}
