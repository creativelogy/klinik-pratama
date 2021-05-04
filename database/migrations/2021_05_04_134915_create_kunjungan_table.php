<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tekanan_darah');
            $table->string('denyut_nadi');
            $table->string('usia_tahun');
            $table->string('usia_bulan');
            $table->string('usia_hari');
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();

            $table->unsignedBigInteger('id_reservasi');
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_penyakit');

            $table -> foreign('id_reservasi')->references('id')->on('reservasi')->onDelete('cascade');
            $table -> foreign('id_pasien')->references('id')->on('pasien')->onDelete('cascade');
            $table -> foreign('id_penyakit')->references('id')->on('ref_penyakit_icd')->onDelete('cascade');
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kunjungan');
    }
}
