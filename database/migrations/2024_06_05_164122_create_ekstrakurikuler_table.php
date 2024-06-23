<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->string('id_ekstrakurikuler', 5)->primary();
            $table->unsignedBigInteger('nip_pembina');
            $table->string('nama_ekstrakurikuler', 50)->nullable(false);
            $table->string('nama', 50);
            $table->foreign('nip_pembina')->references('nip_pembina')->on('pembina')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};
