<?php

namespace App\Domain\DataKelurahan\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\RegistrasiPasien\Models\RegistrasiPasien;

class DataKelurahan extends Model
{
  protected $fillable = ['nama_kelurahan', 'nama_kecamatan','nama_kota'];
  public function registrasiPasiens(){
    return $this->hasMany('RegistrasiPasien');
  }
}
