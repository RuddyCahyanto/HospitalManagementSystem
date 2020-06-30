<?php

namespace App\RegistrasiPasien\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrasiPasien extends Model
{
    public function DataKelurahan(){
      $this->belongsTo('DataKelurahan');
    }
}
