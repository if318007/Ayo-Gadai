<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranBungaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_bunga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gadai_id')->unsigned();
            $table->foreign('gadai_id')->references('id')->on('detail_gadai');
            $table->integer('metode_id')->unsigned();
            $table->foreign('metode_id')->references('id')->on('metode_pembayaran');
            $table->double('jumlah');
            $table->date('tanggal_pembayaran_bunga');
            $table->string('foto_file_pembayaran');
            $table->string('status');
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
