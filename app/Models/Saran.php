<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $fillable = [
        'nama',
        'saran',
        'ket',
        'status',
    ];

    protected $table = 'saran';

}
