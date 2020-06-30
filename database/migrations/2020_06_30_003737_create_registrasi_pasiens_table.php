<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_pasiens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kelurahan_id')->unsigned();
            $table->string('nama');
            $table->string('alamat');
            $table->integer('telepon');
            $table->integer('rt');
            $table->integer('rw');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });

        Schema::table('registrasi_pasiens', function (Blueprint $table){
          $table->foreign('kelurahan_id')->references('id')->on('data_kelurahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_pasiens');
    }
}
