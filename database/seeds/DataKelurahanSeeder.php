<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Domain\DataKelurahan\Models\DataKelurahan;

class DataKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_kelurahans')->delete();

        // $dataKelurahans = ;

        DB::table('data_kelurahans')->insert(
          [
            ['id' => 1, 'nama_kelurahan' => 'Kotabaru','nama_kecamatan' => 'Gondokusuman', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nama_kelurahan' => 'Terban', 'nama_kecamatan' => 'Gondokusuman', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nama_kelurahan' => 'Klitren', 'nama_kecamatan' => 'Gondokusuman', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'nama_kelurahan' => 'Baciro', 'nama_kecamatan' => 'Gondokusuman', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'nama_kelurahan' => 'Demangan', 'nama_kecamatan' => 'Gondokusuman', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'nama_kelurahan' => 'Pringgokusuman', 'nama_kecamatan' => 'Gedongtengen', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'nama_kelurahan' => 'Sosromenduran', 'nama_kecamatan' => 'Gedongtengen', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'nama_kelurahan' => 'Suryatmajan', 'nama_kecamatan' => 'Danurejan', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'nama_kelurahan' => 'Tegal Panggung', 'nama_kecamatan' => 'Danurejan', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'nama_kelurahan' => 'Bausasran', 'nama_kecamatan' => 'Danurejan', 'nama_kota' => 'Kota Yogyakarta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'nama_kelurahan' => 'Condong Catur', 'nama_kecamatan' => 'Depok', 'nama_kota' => 'Sleman', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'nama_kelurahan' => 'Catur Tunggal', 'nama_kecamatan' => 'Depok', 'nama_kota' => 'Sleman', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ]);
    }
}
