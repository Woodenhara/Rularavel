<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $petugasId = DB::table("petugass")->insertGetId([
            'username' => 'maximoff',
            'password' => 'scarletwitch',
            'nama_petugas' => 'ryuk',
        ]);
        $kelasId = DB::table("kelass")->insertGetId([
            'nama_kelas' => 'XI RPL 2',
            'kompetensi_keahlian' => 'Basis Data',
            ]);
        $sppId = DB::table("spps")->insertGetId([
            'tahun' => 1997,
            'nominal' => 999999999,
            ]);
        $siswaId = DB::table("siswas")->insertGetId([
            "nisn"=> Str::random(10),
            'nis' => Str::random(8),
            'nama'=> Str::random(35),
            'id_kelas' => $kelasId,
            'alamat' => Str::random(40),
            'no_telp'=> Str::random(13),
            'id_spp' => $sppId,
            ]);
        $sppIds = DB::table("siswas")->where('nisn', $siswaId)->value('id_spp');

        DB::table("pembayarans")->insert([
            'id_petugas'=> $petugasId,
            'nisn' => $siswaId,
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(8),
            'tahun_dibayar' => rand(2000, 2024),
            'id_spp' => $sppIds,
            'jumlah_bayar' => rand(0, 999999999),
        ]);
    }
}
