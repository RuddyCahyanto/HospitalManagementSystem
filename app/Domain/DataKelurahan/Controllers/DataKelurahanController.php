<?php

namespace App\Domain\DataKelurahan\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\DataKelurahan\Models\DataKelurahan;

class DataKelurahanController extends Controller
{
    private $limit = 5;
    
    public function index(){
      $dataKelurahans = DataKelurahan::paginate($this->limit);
      return view('DataKelurahans.index', compact('kelurahan'));
    }
}
