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
        $kelasId = DB::table("kelass")->insertGetId([
            'nama_kelas' => 'XI RPL 2',
            'kompetensi_keahlian' => 'Basis Data',
            ]);
        $sppId = DB::table("spps")->insertGetId([
            'tahun' => 1997,
            'nominal' => 999999999,
            ]);

        DB::table("siswas")->insert([
            "nisn"=> Str::random(10),
            'nis' => Str::random(8),
            'nama'=> Str::random(35),
            'id_kelas' => $kelasId,
            'alamat' => Str::random(40),
            'no_telp'=> Str::random(13),
            'id_spp' => $sppId,
        ]);
    }
}
