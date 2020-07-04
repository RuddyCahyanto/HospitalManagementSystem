<?php

namespace App\Domain\DataKelurahan\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\DataKelurahan\Models\DataKelurahan;

class DataKelurahanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $limit = 5;

    // must be fill
    private $rules = [
      'nama_kelurahan' => ['required'],
      'nama_kecamatan' => ['required'],
      'nama_kota' => ['required']
    ];

    public function index(){
      $dataKelurahans = DataKelurahan::orderBy('id', 'desc')->paginate($this->limit);
      return view('DataKelurahan.index', compact('dataKelurahans'));
    }

    public function create(){
      return view('DataKelurahan.create');
    }

    public function store(Request $request){
      // execute rules for validation
      $this->validate($request, $this->rules);

      //save to database
      DataKelurahan::create($request->all());

      return redirect('data-kelurahan')->with('message', 'Berhasil disimpan!');
    }

    public function edit($id){
      $dataKelurahan = DataKelurahan::find($id);
      return view('DataKelurahan.edit', compact('dataKelurahan'));
    }

    public function update($id, Request $request){
      // execute rules for validation
      $this->validate($request, $this->rules);
      $dataKelurahan = DataKelurahan::find($id);
      //save to database
      $dataKelurahan->update($request->all());

      return redirect('data-kelurahan')->with('message', 'Berhasil diubah!');
    }

    public function destroy($id){
      $dataKelurahan = DataKelurahan::find($id);

      $dataKelurahan->delete();

      return redirect('data-kelurahan')->with('message', 'Data kelurahan berhasil dihapus!');
    }
}
