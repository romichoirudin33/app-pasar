<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasar;
use App\Models\Survei;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class PasarController extends Controller
{

    public function index()
    {
        return view('admin.pasar.index')
            ->with('data', Pasar::all());
    }

    public function create()
    {
        return view('admin.pasar.create');
    }

    public function store(Request $request)
    {
        $jumlah = $request->jum_bakulan + $request->jum_kios + $request->jum_ruko;
        $setoran_bakulan = $request->jum_bakulan * $request->setor_bakulan;
        $setoran_kios = $request->jum_kios * $request->setor_kios;
        $setoran_ruko = $request->jum_ruko * $request->setor_ruko;
        $potensi_pad = $setoran_kios + $setoran_ruko + $request->pendapatan_lain;
        $data = array(
            'nama' => $request->nama,
            'desa' => $request->desa,
            'kec' => $request->kec,
            'pemb' => $request->pemb,
            'ls' => $request->ls, //lintang selatan
            'bt' => $request->bt, //bujur timur
            'kondisi' => $request->kondisi,
            'luas' => $request->luas,
            'lahan' => $request->lahan,
            'unit' => $request->unit,
            'buka' => $request->buka,
            'jumlah' => $jumlah,
            'omset' => $request->omset,
            'upt' => $request->upt,
            'pengelola' => $request->pengelola
        );
        $pasar = Pasar::create($data);

        $data = array(
            'kantor_pasar' => $request->kantor_pasar,
            'toilet' => $request->toilet,
            'struktur' => $request->struktur,
            'nama_kp' => $request->nama_kp, //kepala pasar
            'hp_kp' => $request->hp_kp, //kepala pasar
            'juru_pungut' => $request->juru_pungut, //jml juru pungut
            'insentif_jp' => $request->insentif_jp, //insentif juru pungut
            'kebersihan' => $request->kebersihan,
            'keamanan' => $request->keamanan,
            'setor_kios' => $request->setor_kios,
            'setor_ruko' => $request->setor_ruko,
            'pendapatan_lain' => $request->pendapatan_lain,
            'jum_kios' => $request->jum_kios,
            'jum_ruko' => $request->jum_ruko,
            'potensi_pad_awal' => 0,
            'potensi_pad' => $potensi_pad, //potensi pendapatan pasar
            'pad_tertagih' => 0,
            'selisih_pad' => $potensi_pad,
            'los_pasar' => $request->los_pasar,
            'anggaran' => $request->anggaran,
            'pengelolaan' => $request->pengelolaan,
            'pasar_id' => $pasar->id,
        );
        Survei::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.pasar.show', ['id' => $pasar->id]);
    }

    public function show($id)
    {
        $data = Pasar::findOrfail($id);
        if (count($data->survei) == 0){
            $data = array(
                'kantor_pasar' => 'Ada',
                'toilet' => 'Ada',
                'struktur' => 'Ada',
                'nama_kp' => '-', //kepala pasar
                'hp_kp' => '', //kepala pasar
                'juru_pungut' => 0, //jml juru pungut
                'insentif_jp' => 0, //insentif juru pungut
                'kebersihan' => 0,
                'keamanan' => 0,
                'setor_kios' => 0,
                'setor_ruko' => 0,
                'pendapatan_lain' => 0,
                'jum_kios' => 0,
                'jum_ruko' => 0,
                'potensi_pad_awal' => 0,
                'potensi_pad' => 0, //potensi pendapatan pasar
                'pad_tertagih' => 0,
                'selisih_pad' => 0,
                'los_pasar' => 0,
                'anggaran' => 0,
                'pengelolaan' => '',
                'pasar_id' => $id,
            );
            Survei::create($data);
        }
        return view('admin.pasar.show')
            ->with('data', Pasar::findOrfail($id));
    }

    public function edit($id)
    {
        return view('admin.pasar.edit')
            ->with('data', Pasar::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $jumlah = $request->jum_bakulan + $request->jum_kios + $request->jum_ruko;
        $setoran_bakulan = $request->jum_bakulan * $request->setor_bakulan;
        $setoran_kios = $request->jum_kios * $request->setor_kios;
        $setoran_ruko = $request->jum_ruko * $request->setor_ruko;
        $potensi_pad = $setoran_kios + $setoran_ruko + $request->pendapatan_lain;
        $data = array(
            'nama' => $request->nama,
            'desa' => $request->desa,
            'kec' => $request->kec,
            'pemb' => $request->pemb,
            'ls' => $request->ls, //lintang selatan
            'bt' => $request->bt, //bujur timur
            'kondisi' => $request->kondisi,
            'luas' => $request->luas,
            'lahan' => $request->lahan,
            'unit' => $request->unit,
            'buka' => $request->buka,
            'jumlah' => $jumlah,
            'omset' => $potensi_pad,
            'upt' => $request->upt,
            'pengelola' => $request->pengelola
        );
        Pasar::where('id', $id)->update($data);

        $data = array(
            'kantor_pasar' => $request->kantor_pasar,
            'toilet' => $request->toilet,
            'struktur' => $request->struktur,
            'nama_kp' => $request->nama_kp, //kepala pasar
            'hp_kp' => $request->hp_kp, //kepala pasar
            'juru_pungut' => $request->juru_pungut, //jml juru pungut
            'insentif_jp' => $request->insentif_jp, //insentif juru pungut
            'kebersihan' => $request->kebersihan,
            'keamanan' => $request->keamanan,
            'setor_bakulan' => $request->setor_bakulan, //tarif setor bakulan
            'setor_kios' => $request->setor_kios,
            'setor_ruko' => $request->setor_ruko,
            'pendapatan_lain' => $request->pendapatan_lain,
            'jum_bakulan' => $request->jum_bakulan,
            'jum_kios' => $request->jum_kios,
            'jum_ruko' => $request->jum_ruko,
            'potensi_pad' => $potensi_pad, //potensi pendapatan pasar
            'pad_tertagih' => 0,
            'selisih_pad' => $potensi_pad,
            'los_pasar' => $request->los_pasar,
            'anggaran' => $request->anggaran,
            'pengelolaan' => $request->pengelolaan,
        );
        Survei::where('pasar_id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.pasar.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        Pasar::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.pasar.index');
    }
}
