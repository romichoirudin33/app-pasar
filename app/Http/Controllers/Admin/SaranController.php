<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasar;
use App\Models\Saran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class SaranController extends Controller
{
    public function index()
    {
        $pasar_id = request()->get('pasar_id') ? request()->get('pasar_id') : null;
        $detail_pasar = '';

        if ($pasar_id == null){
            $data = Saran::orderBy('created_at','desc')->with('pasar')->paginate(50);
        }else{
            $data = Saran::where('pasar_id', $pasar_id)->orderBy('created_at', 'desc')->with('pasar')->paginate(50);
            $detail_pasar = Pasar::where('id', $pasar_id)->first();
        }

        return view('admin.saran.index')
            ->with('detail_pasar', $detail_pasar)
            ->with('pasar', Pasar::all())
            ->with('data', $data);
    }

    public function create()
    {
        return view('admin.saran.create')
            ->with('pasar', Pasar::all());
    }

    public function store(Request $request)
    {
        $data = array(
            'nama' => $request->nama,
            'saran' => $request->saran,
            'ket' => $request->ket,
            'pasar_id' => $request->pasar_id,
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
            ->with('pasar', Pasar::all())
            ->with('data', Saran::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'nama' => $request->nama,
            'saran' => $request->saran,
            'ket' => $request->ket,
            'pasar_id' => $request->pasar_id,
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
