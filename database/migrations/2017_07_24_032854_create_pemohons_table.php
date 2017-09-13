<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pemohon');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('npwp');
            $table->string('telnum');
            $table->string('email');
            $table->string('jabatan');
            $table->string('jekel');
            $table->string('nik');
            $table->string('hp');
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
        Schema::dropIfExists('pemohons');
    }
}
