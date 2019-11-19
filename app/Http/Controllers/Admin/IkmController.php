<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ikm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class IkmController extends Controller
{
    public function index()
    {
        return view('admin.ikm.index')
            ->with('data', Ikm::all());
    }

    public function create()
    {
        return view('admin.ikm.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pemilik' => $request->nama_pemilik,
            'hp_pemilik' => $request->hp_pemilik,
            'jln' => $request->jln,
            'desa' => $request->desa,
            'kec' => $request->kec,
            'jenis_industri' => $request->jenis_industri,
            'nama_produk' => $request->nama_produk,
            'tenaga_kerja_l' => $request->tenaga_kerja_l,
            'tenaga_kerja_p' => $request->tenaga_kerja_p,
            'nilai_investasi' => $request->nilai_investasi,
            'kapasitas_produk_jum' => $request->kapasitas_produk_jum,
            'kapasitas_produk_sat' => $request->kapasitas_produk_sat,
            'nilai_produksi' => $request->nilai_produksi,
            'nilai_bbp_bp' => $request->nilai_bbp_bp,
            'status' => $request->status,
            'bantuan' => $request->bantuan,
        );
        Ikm::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.ikm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.ikm.edit')
            ->with('data', Ikm::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pemilik' => $request->nama_pemilik,
            'hp_pemilik' => $request->hp_pemilik,
            'jln' => $request->jln,
            'desa' => $request->desa,
            'kec' => $request->kec,
            'jenis_industri' => $request->jenis_industri,
            'nama_produk' => $request->nama_produk,
            'tenaga_kerja_l' => $request->tenaga_kerja_l,
            'tenaga_kerja_p' => $request->tenaga_kerja_p,
            'nilai_investasi' => $request->nilai_investasi,
            'kapasitas_produk_jum' => $request->kapasitas_produk_jum,
            'kapasitas_produk_sat' => $request->kapasitas_produk_sat,
            'nilai_produksi' => $request->nilai_produksi,
            'nilai_bbp_bp' => $request->nilai_bbp_bp,
            'status' => $request->status,
            'bantuan' => $request->bantuan,
        );
        Ikm::where('id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.ikm.index');
    }

    public function destroy($id)
    {
        Ikm::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.ikm.index');
    }
}
