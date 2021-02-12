<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyimpanan extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'penyimpanan';
    protected $fillable = ['user_id','jenis_kategori_id','berat','total','foto_file_barang','merk_tipe','kondisi','tahun_pembelian','harga_jual_saat_ini','kelengkapan','jumlah_pinjaman'];

    public function jenis()
    {
        return $this->belongsTo('App\JenisBarang','jenis_kategori_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
