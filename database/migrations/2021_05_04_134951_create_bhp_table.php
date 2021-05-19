<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bhp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_bhp');
            $table -> foreign('id_bhp')->references('id')->on('ref_bhp')->onDelete('cascade');
            $table->bigInteger('harga');
            $table->bigInteger('jml');
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
        Schema::dropIfExists('bhp');
    }
}
