<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table("petugass")->insert([
        //     'username' => Str::random(25),
        //     'password' => Str::random(32),
        //     'nama_petugas' => Str::random(35),
        //     'level' => 'admin',
        // ]);

        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'nama_petugas' => 'admin',
                'level' => 'admin',
            ],
            [
                'username' => 'petugas',
                'email' => 'petugas@gmail.com',
                'password' => bcrypt('petugas'),
                'nama_petugas' => 'petugas',
                'level' => 'petugas',
            ],
        ];

        foreach($users as $key => $value) {
            User::create($value);
        }
    }
}
