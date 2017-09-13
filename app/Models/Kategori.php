<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategoris';

    public function izin()
    {
        return $this->hasMany('App\Models\Izin');
    }

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran');
    }

    public function cekDokument()
    {
        return $this->hasMany('App\Models\Cek_dokumen');
    }
}
