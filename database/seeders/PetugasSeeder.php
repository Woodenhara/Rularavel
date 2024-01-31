<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("petugass")->insert([
            'username' => Str::random(25),
            'password' => Str::random(32),
            'nama_petugas' => Str::random(35),
            'level' => 'admin',
        ]);
    }
}
