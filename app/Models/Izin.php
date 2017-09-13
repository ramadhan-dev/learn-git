<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    public function kategori() {
        return $this->belongsTo('App\Models\Kategori');
    } 

    public function dataizin()
    {
        return $this->hasMany('App\Models\DataIzin');
    }
    
}
