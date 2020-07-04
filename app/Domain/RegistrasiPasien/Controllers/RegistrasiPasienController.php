<?php

namespace App\Domain\RegistrasiPasien\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\RegistrasiPasien\Models\RegistrasiPasien;
use App\Domain\DataKelurahan\Models\DataKelurahan;
use Carbon\Carbon;

class RegistrasiPasienController extends Controller{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  private $rules = [
    'nama' => ['required'],
    'alamat' => ['required'],
    'telepon' => ['required'],
    'rt' => ['required'],
    'rw' => ['required'],
    'tgl_lahir' => ['required'],
    'jns_kelamin' => ['required']
  ];

  public function index(){
    $pasiens = RegistrasiPasien::orderBy('id', 'desc')->paginate(5);
    return view('DataPasien.index', ['pasiens' => $pasiens]);
  }

  public function create(){
    $dataKelurahans = DataKelurahan::orderBy('nama_kelurahan')->pluck('nama_kelurahan', 'id');
    return view('RegistrasiPasien.create', ['dataKelurahans' => $dataKelurahans]);
  }

  public function store(Request $request){

    $this->validate($request, $this->rules);



    //INSERT TO DB
    $pasien = new RegistrasiPasien;
    //SET ID PASIEN TO YYMMxxxxxx FORMAT
    //get last pasien record
    $lastPasienId = RegistrasiPasien::orderBy('id','desc')->first();
    if($lastPasienId == null){
      $pasien->id = ( date('ym') * 1000000 ) + 1;
    }
    else{
      $pasien->id = $lastPasienId->id + 1; //$lastPasienId->id is getting the last record id
    }
    $pasien->kelurahan_id = $request->kelurahan_id;
    $pasien->nama = $request->nama;
    $pasien->alamat = $request->alamat;
    $pasien->telepon = $request->telepon;
    $pasien->rt = $request->rt;
    $pasien->rw = $request->rw;
    $pasien->tgl_lahir = $request->tgl_lahir;
    $pasien->jenis_kelamin = $request->jns_kelamin;
    $pasien->save();

    return redirect('registrasi-pasien')->with('message', 'Berhasil disimpan!');
  }

  public function edit($id){

  }
}
