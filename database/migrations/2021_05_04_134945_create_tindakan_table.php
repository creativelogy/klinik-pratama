<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tindakan');
            $table -> foreign('id_tindakan')->references('id')->on('ref_tindakan')->onDelete('cascade');
            $table->bigInteger('harga');
            $table->bigInteger('jml');
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();

            $table->string('id_periksa_poli');
            
            $table -> foreign('id_periksa_poli')->references('id_periksa')->on('kunjungan_poli')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan');
    }
}
