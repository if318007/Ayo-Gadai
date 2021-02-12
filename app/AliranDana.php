<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AliranDana extends Model
{
    protected $table = 'aliran_dana';
    protected $fillable = ['penyimpanan_id','kas_id','jumlah','jenis_dana','keterangan','tanggal'];

    public function penyimpanan()
    {
        return $this->belongsTo('App\Penyimpanan','penyimpanan_id');
    }

    public function kas()
    {
        return $this->belongsTo('App\Kas','kas_id');
    }
}
