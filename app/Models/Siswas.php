<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    use HasFactory;
    protected $table = 'siswas';

    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp',
    ];

    public function kelas() {
        return $this->hasMany(Kelass::class, 'id_kelas', 'id');
    }
    public function spp() {
        return $this->hasMany(Spp::class, 'id_spp', 'id');
    }
}
