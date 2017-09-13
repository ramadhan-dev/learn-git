<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function izin()
    {
        return $this->belongsTo('App\Models\Izin');
    }

    public function kategori() {
        return $this->belongsTo('App\Models\Kategori');
    }

    public function pemohon() {
        return $this->belongsTo('App\Models\Pemohon');
    }

    public function dataizin() {
        return $this->hasOne('App\Models\DataIzin');
    }
}
