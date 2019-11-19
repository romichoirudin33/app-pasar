<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komoditi extends Model
{
    protected $fillable = [
        'tgl',
        'beras_super',
        'beras_medium',
        'jagung',
        'kedelai_lokal_kuning_kecil',
        'kedelai_lokal_kuning_besar',
        'ubi_kayu',
        'ubi_jalar',
        'gula',
        'minyak_goreng_bimoli',
        'minyak_goreng_curah',
        'tepung',
        'daging_ayam',
        'telur_ayam_kampung',
        'telur_ayam_ras',
        'cabe_merah_besar',
        'cabe_keriting',
        'cabe_rawit',
        'bawang_merah_umbi_kering',
        'bawang_merah_umbi_basah',
        'bawang_putih_umbi_kering',
        'bawang_putih_umbi_basah',
        'kacang_tanah',
        'kacang_hijau',
        'pasar_id',
    ];

    protected $table = 'komoditi';

    public $timestamps = false;

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
