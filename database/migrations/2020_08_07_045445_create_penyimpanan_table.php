<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyimpanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('jenis_kategori_id')->unsigned();
            $table->foreign('jenis_kategori_id')->references('id')->on('jenis_kategori_barang');
            $table->integer('berat');
            $table->integer('total');
            $table->string('foto_file_barang');
            $table->string('merk_tipe');
            $table->string('kondisi');
            $table->string('tahun_pembelian');
            $table->double('harga_jual_saat_ini');
            $table->double('jumlah_pinjaman');
            $table->string('kelengkapan');
            $table->string('status');
            $table->text('keterangan');
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
