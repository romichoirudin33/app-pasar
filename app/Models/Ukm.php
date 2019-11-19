<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $fillable = [
        'nama_pemilik',
        'nama_perusahaan',
        'alamat',
        'bidang_usaha',
        'modal_usaha',
        'omset_per_hari',
        'tk',
        'izin_usaha',
        'keterangan',
    ];

    protected $table = 'ukm';

    public $timestamps = false;
}
