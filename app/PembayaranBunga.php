<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranBunga extends Model
{
    protected $table = 'pembayaran_bunga';
    protected $fillable = ['gadai_id','tanggal_pembayaran_bunga','jumlah','foto_file_pembayaran','metode_id'];

    public function gadai()
    {
        return $this->belongsTo('App\Gadai','gadai_id');
    }

    public function metode()
    {
        return $this->belongsTo('App\MetodePembayaran','metode_id');
    }


}
