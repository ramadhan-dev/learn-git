<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function getNamaAttribute ($value) {
    	return ucwords($value);
    }

    public function setNamaAttribute ($value) {
    	return $this->attributes['nama'] = strtolower($value);
    }

    public function desa()
    {
        return $this->hasMany('App\Models\Desa');
    }
}
