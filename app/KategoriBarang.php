<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = 'kategori_barang';
    protected $fillable = ['nama_kategori_barang','foto_barang'];

    
}
