<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rth', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onDelete('cascade');
            $table->integer('jenis');
            $table->string('nama_lokasi');
            $table->double('luas');
            $table->text('gambar');
            $table->text('keterangan');
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
        Schema::dropIfExists('rth');
    }
}
