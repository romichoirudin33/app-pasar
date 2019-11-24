<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bakulan;
use App\Models\Pasar;
use App\Models\Survei;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Toastr;

class BakulanController extends Controller
{
    public function index()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null){
            $data = [];
        }else{
            $data = Bakulan::where('pasar_id', $pasar_id)->get();
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('admin.bakulan.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function create()
    {
        return view('admin.bakulan.create')
            ->with('pasar', Pasar::all());
    }

    public function store(Request $request)
    {
        $data = array(
            'tanggal' => $request->tanggal,
            'jum_bakulan' => $request->jum_bakulan,
            'setor_bakulan' => $request->setor_bakulan,
            'total_setoran_bakulan' => $request->jum_bakulan * $request->setor_bakulan,
            'pasar_id' => $request->pasar_id,
        );
        $cek = Bakulan::where('pasar_id', $request->pasar_id)->where('tanggal', $request->tanggal)->exists();
        if ($cek){
            Bakulan::where('pasar_id', $request->pasar_id)->where('tanggal', $request->tanggal)->update($data);
        }else{
            Bakulan::create($data);
        }

        $today = Carbon::now();

        //update pad awal
        $total_setoran_bakulan = Bakulan::where(DB::raw('MONTH(tanggal)'), $today->month)
            ->where(DB::raw('YEAR(tanggal)'), $today->year)
            ->where('pasar_id', $request->pasar_id)
            ->get()->sum('total_setoran_bakulan');
        Survei::where('pasar_id', $request->pasar_id)->update(['potensi_pad_awal' => $total_setoran_bakulan]);


        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.bakulan.index', ['pasar_id' => $request->pasar_id]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $data = Bakulan::where('id', $id)->first();
        $pasar_id = $data->pasar_id;
        $data->delete();

        //update pad awal
        $today = Carbon::now();
        $total_setoran_bakulan = Bakulan::where(DB::raw('MONTH(tanggal)'), $today->month)
            ->where(DB::raw('YEAR(tanggal)'), $today->year)
            ->where('pasar_id', $pasar_id)
            ->get()->sum('total_setoran_bakulan');
        Survei::where('pasar_id', $pasar_id)->update(['potensi_pad_awal' => $total_setoran_bakulan]);

        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.bakulan.index', ['pasar_id' => $pasar_id]);
    }
}
