<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $fillable = [
        'nama',
        'desa',
        'kec',
        'pemb',
        'ls', //lintang selatan
        'bt', //bujur timur
        'kondisi',
        'luas',
        'lahan',
        'unit',
        'buka',
        'jumlah',
        'omset',
        'upt',
        'pengelola',
        'denah',
        'map',
    ];

    protected $table = 'pasar';

    public $timestamps = false;

    public function survei()
    {
        return $this->hasOne(Survei::class, 'pasar_id');
    }

    public function gambar_pasar()
    {
        return $this->hasMany(GambarPasar::class, 'pasar_id');
    }
}
