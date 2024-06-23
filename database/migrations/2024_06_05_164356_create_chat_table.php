<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal'); // Foreign key dari pengajuan_pertemuan
            $table->unsignedBigInteger('nip_pembina');
            $table->integer('nis');
            $table->text('pesan');
            $table->datetime('tanggal');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('pengajuan_pertemuan');
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
        Schema::dropIfExists('chat');
    }
}
