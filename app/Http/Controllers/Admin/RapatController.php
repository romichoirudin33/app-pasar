<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasar;
use App\Models\Rapat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class RapatController extends Controller
{
    public function index()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null){
            $data = Rapat::orderBy('updated_at','desc')->with('pasar')->paginate(50);
        }else{
            $data = Rapat::where('pasar_id', $pasar_id)->orderBy('updated_at', 'desc')->with('pasar')->paginate(50);
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('admin.rapat.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function create()
    {
        return view('admin.rapat.create')
            ->with('pasar', Pasar::all());
    }

    public function store(Request $request)
    {
        $data = array(
            'kegiatan' => $request->kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'hasil_rapat' => $request->hasil_rapat,
            'pasar_id' => $request->pasar_id,
        );
        Rapat::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.rapat.index');
    }

    public function show($id)
    {
        return view('admin.rapat.show')
            ->with('data', Rapat::findOrfail($id));
    }

    public function edit($id)
    {
        return view('admin.rapat.edit')
            ->with('pasar', Pasar::all())
            ->with('data', Rapat::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'kegiatan' => $request->kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'hasil_rapat' => $request->hasil_rapat,
            'pasar_id' => $request->pasar_id,
        );
        Rapat::where('id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.rapat.index');
    }

    public function destroy($id)
    {
        Rapat::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.rapat.index');
    }
}
