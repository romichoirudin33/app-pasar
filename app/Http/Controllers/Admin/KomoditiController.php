<?php

namespace App\Http\Controllers\Admin;

use App\Models\Komoditi;
use App\Models\Pasar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class KomoditiController extends Controller
{

    public function index()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';
        if ($pasar_id == null){
            $data = Komoditi::distinct('pasar_id')->orderBy('tgl', 'desc')->get();
        }else{
            $data = Komoditi::where('pasar_id', $pasar_id)->orderBy('tgl', 'desc')->get();
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }
        return view('admin.komoditi.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function create()
    {
        return view('admin.komoditi.create')
            ->with('pasar', Pasar::all());
    }

    public function store(Request $request)
    {
        $data = array(
            'tgl' => $request->tgl,
            'beras_super' => $request->beras_super,
            'beras_medium' => $request->beras_medium,
            'jagung' => $request->jagung,
            'kedelai_lokal_kuning_kecil' => $request->kedelai_lokal_kuning_kecil,
            'kedelai_lokal_kuning_besar' => $request->kedelai_lokal_kuning_besar,
            'ubi_kayu' => $request->ubi_kayu,
            'ubi_jalar' => $request->ubi_jalar,
            'gula' => $request->gula,
            'minyak_goreng_bimoli' => $request->minyak_goreng_bimoli,
            'minyak_goreng_curah' => $request->minyak_goreng_bimoli,
            'tepung' => $request->tepung,
            'daging_ayam' => $request->daging_ayam,
            'telur_ayam_kampung' => $request->telur_ayam_kampung,
            'telur_ayam_ras' => $request->telur_ayam_ras,
            'cabe_merah_besar' => $request->cabe_merah_besar,
            'cabe_keriting' => $request->cabe_keriting,
            'cabe_rawit' => $request->cabe_rawit,
            'bawang_merah_umbi_kering' => $request->bawang_merah_umbi_kering,
            'bawang_merah_umbi_basah' => $request->bawang_merah_umbi_basah,
            'bawang_putih_umbi_kering' => $request->bawang_putih_umbi_kering,
            'bawang_putih_umbi_basah' => $request->bawang_putih_umbi_basah,
            'kacang_tanah' => $request->kacang_tanah,
            'kacang_hijau' => $request->kacang_hijau,
            'pasar_id' => $request->pasar_id,
        );
        Komoditi::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.komoditi.index', ['pasar_id' => $request->pasar_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
