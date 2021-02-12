<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['user_id','nama','jenis_kelamin','nomor_hp','nomor_identitas','foto_profile','foto_kartu_identitas','domisili','alamat','tempat_lahir','tanggal_lahir'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
