<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Siswa extends Model
{
    //
    use HasFactory, HasUuids;

    protected $table = 'siswas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nisn',
        'nama_siswa',
        'jk',
        'tahun_masuk',
    ];
}
