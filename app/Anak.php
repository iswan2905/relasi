<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fillable = ['nama', 'orangtua_id', 'umur', 'alamat'];
    protected $visible = ['nama', 'orangtua_id', 'umur', 'alamat'];
    public $timestamps = true;

    public function orangtua()
    {
    	return $this->belongsTo('App\OrangTua', 'orangtua_id');
    }
}
