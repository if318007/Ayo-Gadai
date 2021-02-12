<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gadai extends Model
{
    protected $table = 'detail_gadai';
    protected $fillable = ['penyimpanan_id','biaya_administrasi','tanggal_gadai','tanggal_jatuh_tempo','tanggal_jatuh_tempo_tenggang','tanggal_pelunasan','perpanjangan_ke','tanggal_lelang','status'];

    public function penyimpanan()
    {
        return $this->belongsTo('App\Penyimpanan','penyimpanan_id');
    }

    public function administrasi()
    {
        return $this->belongsTo('App\DataPerusahaan','biaya_administrasi');
    }
}
