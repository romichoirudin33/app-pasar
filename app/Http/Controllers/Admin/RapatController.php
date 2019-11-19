<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rapat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class RapatController extends Controller
{
    public function index()
    {
        return view('admin.rapat.index')
            ->with('data', Rapat::orderBy('updated_at','desc')->paginate(50));
    }

    public function create()
    {
        return view('admin.rapat.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'kegiatan' => $request->kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'hasil_rapat' => $request->hasil_rapat,
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
            ->with('data', Rapat::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'kegiatan' => $request->kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'hasil_rapat' => $request->hasil_rapat,
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
