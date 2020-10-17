<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rth extends Model
{
    protected $table = 'lokasi';
    protected $fillable = [
    	'jenis_spot_id',
    	'nama_lokasi',
    	'luas',
    	'gambar',
    	'keterangan','lintang','bujur'];

    public function jenis_spot()
    {
    	return $this->belongsTo(Kelurahan::class);
    }
}
