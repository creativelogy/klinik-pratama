<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPenyakitIcdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_penyakit_icd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('nama');
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_penyakit_icd');
    }
}
