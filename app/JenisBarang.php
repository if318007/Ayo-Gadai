<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    protected $table = 'jenis_kategori_barang';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori_id','nama_jenis_kategori_barang','bunga','waktu_tenggang'];

    public function kategori()
    {
        return $this->belongsTo('App\KategoriBarang','kategori_id');
    }
}
