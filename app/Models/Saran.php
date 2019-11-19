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
        'pasar_id',
    ];

    protected $table = 'saran';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
