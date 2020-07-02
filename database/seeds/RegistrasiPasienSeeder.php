<?php

use Illuminate\Database\Seeder;

class RegistrasiPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('registrasi_pasiens')->delete();

         // $dataKelurahans = ;

         DB::table('registrasi_pasiens')->insert(
           [
             'id' => 1,
             'kelurahan_id' => 1,
             'nama' => 'Ruddy Cahyanto',
             'alamat' => 'Jl. Elang No 343',
             'telepon' => '082212345678',
             'rt' => 11,
             'rw' => 2,
             'tgl_lahir' => '1996-02-19',
             'jenis_kelamin' => 'Laki-laki',
             'created_at' => new DateTime,
             'updated_at' => new DateTime
           ]);
     }
}
