<?php

namespace App\Http\Controllers\Admin;

use App\Models\Saran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class SaranController extends Controller
{
    public function index()
    {
        return view('admin.saran.index')
            ->with('data', Saran::orderBy('created_at','desc')->paginate(50));
    }

    public function create()
    {
        return view('admin.saran.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'nama' => $request->nama,
            'saran' => $request->saran,
            'ket' => $request->ket,
            'status' => 'dilihat',
        );
        Saran::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.saran.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.saran.edit')
            ->with('data', Saran::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'nama' => $request->nama,
            'saran' => $request->saran,
            'ket' => $request->ket,
        );
        Saran::where('id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.saran.index');
    }

    public function destroy($id)
    {
        Saran::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.saran.index');
    }
}
