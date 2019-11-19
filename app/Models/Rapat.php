<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $fillable = [
        'kegiatan',
        'tanggal_kegiatan',
        'hasil_rapat',
        'pasar_id',
    ];

    protected $table = 'rapat';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
