<?php

namespace App\Domain\RegistrasiPasien\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\DataKelurahan\Models\DataKelurahan;

class RegistrasiPasien extends Model
{
    protected $fillable = [
      'nama',
      'alamat',
      'telepon',
      'rt',
      'rw',
      'tgl_lahir',
      'jenis_kelamin'
    ];

    public function kelurahan(){
      return $this->belongsTo(DataKelurahan::class, 'kelurahan_id');
    }
}
