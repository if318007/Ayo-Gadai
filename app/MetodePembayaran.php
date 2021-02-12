<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    protected $table = 'metode_pembayaran';
    protected $fillable = ['nama_pembayaran','jenis','foto_file_pembayaran'];
}
