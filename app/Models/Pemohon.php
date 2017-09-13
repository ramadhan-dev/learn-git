<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    public function saham () {
    	return $this->hasOne('App\Models\Saham');
    }

    public function pendaftaran()
    {
        return $this->hasOne('App\Models\Pendaftaran');
    }
}
