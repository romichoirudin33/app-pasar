<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GambarPasar extends Model
{
    protected $fillable = [
        'nama_file',
        'pasar_id',
    ];

    protected $table = 'gambar_pasar';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }

}
