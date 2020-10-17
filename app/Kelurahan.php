<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'jenis_spot';
    protected $fillable = ['nama_jenis'];

    public function lokasi()
    {
    	return $this->hasMany(Rth::class);
    }
}
