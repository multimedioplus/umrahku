<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email');
          $table->string('hp')->unique();
          $table->string('deskripsi');
          $table->string('alamat');
          $table->string('foto');
          $table->string('ktp');
          $table->string('passport');
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
        Schema::dropIfExists('data');
    }
}
