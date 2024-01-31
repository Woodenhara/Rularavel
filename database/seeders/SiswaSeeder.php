<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kelasId = DB::table("kelass")->insert([
            'nama_kelas' => 'XI RPL 2',
            'kompetensi_keahlian' => 'Basis Data',
            ]);
        $sppId = DB::table("spps")->insert([
            'tahun' => 1997,
            'nominal' => 999999999,
            ]);

        DB::table("siswas")->insert([
            'nis' => Str::random(8),
            'nama'=> Str::random(35),
            'kelas_id' => $kelasId,
            'alamat' => Str::random(40),
            'no_telp'=> Str::random(13),
            'spp_id' => $sppId,
        ]);
    }
}
