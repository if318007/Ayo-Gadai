<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $table = 'kas';
    protected $fillable = ['nama_kas','bank','no_rekening','nama_pemilik','saldo_awal','saldo_akhir'];
}
