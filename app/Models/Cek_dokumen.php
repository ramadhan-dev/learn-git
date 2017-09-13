<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cek_dokumen extends Model
{
	protected $table = 'cek_dokuments';

	public function kategori() {
        return $this->belongsTo('App\Models\Kategori');
    }
    
    public function persyaratan() {
        return $this->belongsTo('App\Models\Persyaratan');
    }
}
 