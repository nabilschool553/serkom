<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakulikuler extends Model
{
    //
    use HasFactory, HasUuids;

    protected $table = 'ekstrakulikulers';
    protected $primaryKey = 'id_ekstrakulikuler';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_eskul',
        'pembina',
        'jadwal',
        'deskripsi',
        'gambar',
    ];
}
