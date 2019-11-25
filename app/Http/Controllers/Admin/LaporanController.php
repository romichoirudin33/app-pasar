<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ikm;
use App\Models\Pasar;
use App\Models\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function grafik_pad()
    {
        $pasar = Pasar::all();
        return view('admin.laporan.grafik.index')
            ->with('pasar', $pasar);
    }

    public function lainnya()
    {
        return view('admin.laporan.lainnya.index');
    }

    public function download()
    {
        $jenis = request()->get('jenis');
        switch ($jenis) {
            case 'pasar':
                return view('admin.laporan.lainnya.excel.pasar')
                    ->with('data', Pasar::all());
                break;
            case 'ikm':
                return view('admin.laporan.lainnya.excel.ikm')
                    ->with('data', Ikm::all());
                break;
            case 'ukm':
                return view('admin.laporan.lainnya.excel.ukm')
                    ->with('data', Ukm::all());
                break;
            default:
                abort(404);
        }
    }
}
