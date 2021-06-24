<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('no_rm')->nullable();
            $table -> string('nama');
            $table -> string('nik');
            $table -> string('alamat');
            $table -> string('tempat_lahir');
            $table -> date('tgl_lahir');
            $table -> integer('rt')-> nullable();
            $table -> integer('rw')-> nullable();
            $table -> string('id_kelurahan')-> nullable();
            $table -> string('id_kecamatan')-> nullable();
            $table -> string('id_kabupaten')->nullable();
            $table -> string('id_provinsi')->nullable();
            $table -> string('id_user')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
