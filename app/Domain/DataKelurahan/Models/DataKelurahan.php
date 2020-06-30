<?php

namespace App\Domain\DataKelurahan\Models;

use Illuminate\Database\Eloquent\Model;

class DataKelurahan extends Model
{
  protected $fillable = ['nama_kelurahan', 'nama_kecamatan','nama_kota'];
  public function registrasiPasien(){
    return $this->hasMany('RegistrasiPasien');
  }
}
