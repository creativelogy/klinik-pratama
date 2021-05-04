<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_telp');
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();

            $table->unsignedBigInteger('id_poli_bagian');
            $table -> foreign('id_poli_bagian')->references('id')->on('ref_poli_bagian')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
