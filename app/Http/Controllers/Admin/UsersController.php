<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index')
            ->with('data', User::all());
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $cek = User::where('username', $request->username)->exists();
        if ($cek) {
            Toastr::error("Username $request->username sudah ada. Gunakan username yang lain", 'Gagal');
            return redirect()->back();
        }
        $data = array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'api_token' => str_random(10),
            'role' => $request->role,
        );
        User::create($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return view('admin.users.edit')
            ->with('data', User::findOrfail($id));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'api_token' => str_random(10),
            'role' => $request->role,
        );
        User::where('id', $id)->update($data);
        Toastr::success('Data berhasil di simpan', 'Success');
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        Toastr::success('Hapus data berhasil', 'Success');
        return redirect()->route('admin.users.index');
    }
}
