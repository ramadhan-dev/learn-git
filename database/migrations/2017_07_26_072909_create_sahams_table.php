<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSahamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sahams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemohon_id')->unsigned();
            $table->foreign('pemohon_id')->references('id')->on('pemohons');
            $table->string('bentuk')->nullable(true);
            $table->string('saham1')->nullable(true);
            $table->string('saham2')->nullable(true);
            $table->string('saham3')->nullable(true);
            $table->string('saham4')->nullable(true);
            $table->string('jumlah1')->nullable(true);
            $table->string('jumlah2')->nullable(true);
            $table->string('jumlah3')->nullable(true);
            $table->string('jumlah4')->nullable(true);
            $table->string('penanggung')->nullable(true);
            $table->string('alamat')->nullable(true);
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
        Schema::dropIfExists('sahams');
    }
}
