<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_rencana_datang');
            $table->string('no_telp');
            $table->string('status_pasien');
            $table->string('created_by');
            $table->string('edited_by');
			$table->string('keluhan');
            $table->timestamps();

            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_poli_bagian');
            $table->unsignedBigInteger('id_dokter');

            $table -> foreign('id_pasien')->references('id')->on('pasien')->onDelete('cascade');
            $table -> foreign('id_poli_bagian')->references('id')->on('ref_poli_bagian')->onDelete('cascade');
            $table -> foreign('id_dokter')->references('id')->on('dokter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
}
