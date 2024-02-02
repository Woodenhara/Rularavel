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
        $petugasId = DB::table("petugass")->value("id_petugas");

        $sppId = DB::table("spps")->value("id_spp");

        $Nisn = DB::table('siswas')->inRandomOrder()->value('nisn');

        DB::table("pembayarans")->insert([
            'id_petugas' => $petugasId,
            'nisn' => $Nisn,
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(8),
            'tahun_dibayar' => rand(2000, 2024),
            'id_spp' => $sppId,
            'jumlah_bayar' => rand(0, 999999999),
        ]);
    }
}
