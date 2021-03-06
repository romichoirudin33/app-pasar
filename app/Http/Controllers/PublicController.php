<?php

namespace App\Http\Controllers;

use App\Models\Ikm;
use App\Models\Komoditi;
use App\Models\Pasar;
use App\Models\Rapat;
use App\Models\Saran;
use App\Models\Survei;
use App\Models\Ukm;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function pasar()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null) {
            $data = Pasar::with('gambar_pasar')->paginate(15);
        } else {
            $data = Pasar::where('id', $pasar_id)->with('gambar_pasar')->paginate(15);
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }
        return view('public.pasar.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function pasar_show($id)
    {
        return view('public.pasar.show')
            ->with('pasar_lainnya', Pasar::all()->random(4))
            ->with('data', Pasar::findOrFail($id));
    }

    public function komoditi()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        $show = false;
        if ($pasar_id == null) {
            $data = [];
        } else {
            $show = true;
            $data = Komoditi::where('pasar_id', $pasar_id)->orderBy('tgl', 'desc')->first();
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }
        return view('public.komoditi.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('show', $show)
            ->with('data', $data);
    }

    public function rapat()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null) {
            $data = Rapat::orderBy('updated_at', 'desc')->with('pasar')->paginate(50);
        } else {
            $data = Rapat::where('pasar_id', $pasar_id)->orderBy('updated_at', 'desc')->with('pasar')->paginate(50);
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('public.rapat.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function saran()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null) {
            $data = Saran::orderBy('created_at', 'desc')->with('pasar')->paginate(50);
        } else {
            $data = Saran::where('pasar_id', $pasar_id)->orderBy('created_at', 'desc')->with('pasar')->paginate(50);
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('public.saran.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function ikmUkm()
    {
        return view('public.ikm-ukm.index')
            ->with('ikm', Ikm::all())
            ->with('ukm', Ukm::all());
    }

    public function grafik_pad()
    {
        $pasar = Pasar::all();
        return view('public.grafik-pad.index')
            ->with('pasar', $pasar);
    }

    public function dev()
    {
        $data = Pasar::all();
        $total = 0;
        foreach ($data as $i) {
            if (count($i->survei) == 0) {
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
                    'pasar_id' => $i->id,
                );
                Survei::create($data);
                $total += 1;
            }
        }
        return $total;
    }

}
