<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPoliBagianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_poli_bagian', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('nama');
            $table -> integer('harga_pendaftaran');
            $table -> string('created_by');
            $table -> string('edited_by');
            $table->timestamps();
            
            $table -> string('id_user');
            $table -> foreign('id_user')->references('id_user')->on('pasien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_poli_bagian');
    }
}
