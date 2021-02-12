<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPerusahaan extends Model
{
    protected $table = 'data_perusahaan';
    protected $fillable = ['nama_perusahaan','logo_perusahaan','biaya_admin','denda_per_hari'];
}
