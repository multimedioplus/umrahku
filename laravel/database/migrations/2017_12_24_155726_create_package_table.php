<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('packages', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama');
        $table->string('deskripsi');
        $table->string('harga');
        $table->string('rute');
        $table->string('hotel');
        $table->string('kamar');
        $table->string('pesawat');
        $table->string('berangkat');
        $table->string('kembali');
        $table->string('kapasitas');
        $table->string('user');
        $table->string('foto');
        $table->string('seat')
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
        Schema::dropIfExists('packages');
    }
}
