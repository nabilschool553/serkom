<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    use HasUuids;

    protected $table = "beritas";
    protected $primaryKey = 'id_berita';
    protected $keyType = 'string';

    protected $guarded = [];
}
