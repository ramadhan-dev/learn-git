<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataIzinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_izins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendaftaran_id')->unsigned();
            $table->foreign('pendaftaran_id')->references('id')->on('pendaftarans')->onDelete('cascade');
            $table->integer('izin_id')->unsigned()->nullable(true);
            $table->foreign('izin_id')->references('id')->on('izins')->onDelete('cascade');
            $table->string('status')->nullable(true);
            $table->string('kegiatan')->nullable(true);

            $table->string('barang_pokok')->nullable(true);
            $table->string('kegunaan')->nullable(true);
            $table->string('lokasi')->nullable(true);
            $table->integer('kecamatan_id')->unsigned();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onDelete('cascade');
            $table->integer('desa_id')->unsigned();
            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('cascade');
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
        Schema::dropIfExists('data_izins');
    }
}
