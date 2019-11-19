<?php

namespace App\Http\Controllers\Admin;

use App\Models\GambarPasar;
use App\Models\Pasar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class GambarPasarController extends Controller
{

    public function index()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null){
            $data = [];
        }else{
            $data = Pasar::where('id', $pasar_id)->get();
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('admin.gambar-pasar.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function create()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';
        if ($pasar_id != null){
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }
        return view('admin.gambar-pasar.create')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all());
    }

    public function store(Request $request)
    {
        if ($request->file('nama_file')) {
            $file = time() . '.' . $request->file('nama_file')->extension();
            $path_img = public_path() . '/img/';
            $request->file('nama_file')->move($path_img, $file);

            $data = array(
                'nama_file' => $file,
                'pasar_id' => $request->pasar_id
            );
            GambarPasar::create($data);
            Toastr::success('Data berhasil di simpan', 'Success');
            return redirect()->route('admin.gambar-pasar.index', ['pasar_id' => $request->pasar_id]);
        }

        Toastr::warning('Terjadi kesalahan dengan file, coba ulangi atau ganti file', 'warning');
        return redirect()->back();
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
        $data = GambarPasar::findOrFail($id);
        $pasar_id = $data->pasar_id;
        $data->delete();

        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.gambar-pasar.index', ['pasar_id' => $pasar_id]);
    }
}
