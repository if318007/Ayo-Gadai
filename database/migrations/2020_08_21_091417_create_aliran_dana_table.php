<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliranDanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliran_dana', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penyimpanan_id')->unsigned();
            $table->foreign('penyimpanan_id')->references('id')->on('penyimpanan');
            $table->integer('kas_id')->unsigned();
            $table->foreign('kas_id')->references('id')->on('kas');
            $table->double('jumlah');
            $table->string('jenis_dana');
            $table->string('keterangan');
            $table->date('tanggal');
            $table->rememberToken();
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
        //
    }
}
