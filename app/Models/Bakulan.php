<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bakulan extends Model
{
    protected $fillable = [
        'tanggal',
        'jum_bakulan',
        'setor_bakulan',
        'total_setoran_bakulan',
        'pasar_id',
    ];

    protected $table = 'bakulan';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
