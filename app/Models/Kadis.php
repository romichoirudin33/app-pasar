<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kadis extends Model
{
    protected $fillable = [
        'nip',
        'nama',
    ];

    protected $table = 'kadis';

    public $timestamps = false;
}
