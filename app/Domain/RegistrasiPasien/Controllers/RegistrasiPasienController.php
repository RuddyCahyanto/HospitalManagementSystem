<?php

namespace App\Domain\RegistrasiPasien\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\RegistrasiPasien\Models\RegistrasiPasien;

class RegistrasiPasienController extends Controller{
  public function index(){
    return view('RegistrasiPasien.create');
  }
}
