<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'id_user',
        'nisn',
        'tgl_bayar',
        'id_spp',
        'jumlah_bayar',
    ];

    public function user() {
        return $this->hasMany(User::class, 'id_user', 'id');
    }
    public function siswa() {
        return $this->hasMany(Siswas::class, 'nisn', 'nisn');
    }
    public function spp() {
        return $this->hasMany(Spp::class, 'id_spp', 'id');
    }
}
