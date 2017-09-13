<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTtdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nip');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('header');
            $table->string('title1');
            $table->string('title2');
            $table->string('berlaku');
            $table->string('sebagai');
            $table->string('status');
            $table->string('ttd');
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
        Schema::dropIfExists('ttds');
    }
}
