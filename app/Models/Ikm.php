<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ikm extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'nama_pemilik',
        'hp_pemilik',
        'jln',
        'desa',
        'kec',
        'jenis_industri',
        'nama_produk',
        'tenaga_kerja_l',
        'tenaga_kerja_p',
        'nilai_investasi',
        'kapasitas_produk_jum',
        'kapasitas_produk_sat',
        'nilai_produksi',
        'nilai_bbp_bp',
        'status',
        'bantuan',
    ];

    protected $table = 'ikm';

    public $timestamps = false;
}
