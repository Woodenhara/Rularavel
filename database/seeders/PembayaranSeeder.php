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
        $petugasId = DB::table("petugass")->insert([
            'username' => 'Maximoff',
            'password'=> 'ScarlettWitch',
            'nama_petugas'=> 'Ryuk',
            ]);
        $sppId = DB::table("spps")->insert([
            'tahun' => 1997,
            'nominal' => 999999999,
            ]);

        DB::table("pembayarans")->insert([
            'petugas_id'=> $petugasId,
            'nisn' => Str::random(10),
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(8),
            'tahun_dibayar' => rand(2000, 2024),
            'spp_id' => $sppId,
            'jumlah_bayar' => rand(0, 999999999),
        ]);
    }
}
