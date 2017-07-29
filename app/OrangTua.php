<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    //
    protected $table = 'orang_tuas';
    protected $fillable = ['nama_ayah', 'nama_ibu', 'umur_ayah', 'umur_ibu', 'alamat'];
    protected $visible = ['nama_ayah', 'nama_ibu', 'umur_ayah', 'umur_ibu', 'alamat'];
    public $timestamps = true;

    public function anak()
    {
    	return $this->hasMany('App\Anak', 'orangtua_id');
    }
}
