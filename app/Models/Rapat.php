<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $fillable = [
        'kegiatan',
        'tanggal_kegiatan',
        'hasil_rapat',
    ];

    protected $table = 'rapat';
}
