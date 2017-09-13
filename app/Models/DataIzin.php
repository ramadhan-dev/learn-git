<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataIzin extends Model
{
    public function desa() {
        return $this->belongsTo('App\Models\Desa');
    }

    public function pendaftaran() {
        return $this->belongsTo('App\Models\Pendaftaran');
    }

    public function izin() {
        return $this->belongsTo('App\Models\Izin');
    }


}
