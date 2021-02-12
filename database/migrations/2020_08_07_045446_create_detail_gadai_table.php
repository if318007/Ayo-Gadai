<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailGadaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_gadai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penyimpanan_id')->unsigned();
            $table->foreign('penyimpanan_id')->references('id')->on('penyimpanan');
            $table->integer('biaya_administrasi')->unsigned();
            $table->foreign('biaya_administrasi')->references('id')->on('data_perusahaan');
            $table->date('tanggal_gadai');
            $table->date('tanggal_jatuh_tempo');
            $table->date('tanggal_jatuh_tempo_tenggang');
            $table->date('tanggal_pelunasan');
            $table->date('tanggal_lelang');
            $table->integer('perpanjangan_ke');
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
