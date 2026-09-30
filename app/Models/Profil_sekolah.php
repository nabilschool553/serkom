<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Profil_sekolah extends Model
{
    //
    use HasFactory;

    protected $table = 'profil_sekolah';
    protected $primaryKey = 'id_profil_sekolah';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_profil_sekolah',
        'nama_sekolah',
        'kepala_sekolah',
        'foto',
        'logo',
        'npsn',
        'alamat',
        'kontak',
        'visi_misi',
        'tahun_berdiri',
        'deskripsi',
    ];
}
