<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    protected $fillable = [
        'kantor_pasar',
        'toilet',
        'struktur',
        'nama_kp', //kepala pasar
        'hp_kp', //kepala pasar
        'juru_pungut', //jml juru pungut
        'insentif_jp', //insentif juru pungut
        'kebersihan',
        'keamanan',
        'setor_bakulan', //tarif setor bakulan
        'setor_kios',
        'setor_ruko',
        'pendapatan_lain',
        'jum_bakulan',
        'jum_kios',
        'jum_ruko',
        'potensi_pad_awal', //potensi pendapatan pasar
        'potensi_pad', //potensi pendapatan pasar
        'los_pasar',
        'pad_tertagih',
        'selisih_pad',
        'anggaran',
        'pengelolaan',
        'gambar',
        'pasar_id',
    ];

    protected $table = 'survei';

    public $timestamps = false;

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
