<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class UkmController extends Controller
{
    public function index()
    {
        return view('admin.ukm.index')
            ->with('data', Ukm::all());
    }

    public function create()
    {
        return view('admin.ukm.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'nama_pemilik' => $request->nama_pemilik,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'bidang_usaha' => $request->bidang_usaha,
            'modal_usaha' => $request->modal_usaha,
            'omset_per_hari' => $request->omset_per_hari,
            'tk' => $request->tk,
            'izin_usaha' => $request->izin_usaha,
            'keterangan' => $request->keterangan,
        );
        Ukm::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.ukm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.ukm.edit')
            ->with('data', Ukm::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'nama_pemilik' => $request->nama_pemilik,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'bidang_usaha' => $request->bidang_usaha,
            'modal_usaha' => $request->modal_usaha,
            'omset_per_hari' => $request->omset_per_hari,
            'tk' => $request->tk,
            'izin_usaha' => $request->izin_usaha,
            'keterangan' => $request->keterangan,
        );
        Ukm::where('id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.ukm.index');
    }

    public function destroy($id)
    {
        Ukm::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.ukm.index');
    }
}
