<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_poli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_periksa')->unique();
			$table->integer('biaya_pendaftaran');
			$table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();

            $table->unsignedBigInteger('id_poli_bagian');
			$table->unsignedBigInteger('id_dokter_pemeriksa');
			$table->unsignedBigInteger('id_perawat_pemeriksa');
			$table->unsignedBigInteger('id_penyakit');

            $table -> foreign('id_poli_bagian')->references('id')->on('ref_poli_bagian')->onDelete('cascade');
            $table -> foreign('id_dokter_pemeriksa')->references('id')->on('dokter')->onDelete('cascade');
            $table -> foreign('id_perawat_pemeriksa')->references('id')->on('perawat')->onDelete('cascade');
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
        Schema::dropIfExists('kunjungan_poli');
    }
}
