<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
	protected $table = 'persyaratans';

	public function cekDokument()
    {
        return $this->hasMany('App\Models\Cek_dokumen');
    }
    
}
