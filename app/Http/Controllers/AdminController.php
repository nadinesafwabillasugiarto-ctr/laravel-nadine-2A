<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Admin (Latihan)';
        $data['admins'] = Admin::all();
        return view('admin.tampil_data_latihan', $data);
    }

    // 1. Menampilkan form tambah data
    public function create()
    {
        $data['judul'] = 'Tambah Data Admin';
        return view('admin.tambah_data_latihan', $data);
    }

    // 2. Menyimpan data baru ke database
    public function store(Request $request)
    {
        Admin::create([
            'id_admin' => $request->id_admin,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Enskripsi password
        ]);
        
        return redirect('/admin')->with('success', 'Admin berhasil ditambahkan!');
    }

    // 3. Menampilkan form edit data
    public function edit($id)
    {
        $data['judul'] = 'Edit Data Admin';
        $data['admin'] = Admin::where('id_admin', $id)->first();
        return view('admin.edit_data_latihan', $data);
    }

    // 4. Memperbarui data di database
    public function update(Request $request, $id)
    {
        $admin = Admin::where('id_admin', $id)->first();
        $admin->username = $request->username;
        if($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        return redirect('/admin')->with('success', 'Admin berhasil diperbarui!');
    }

    // 5. Menghapus data dari database
    public function destroy($id)
    {
        Admin::where('id_admin', $id)->delete();
        return redirect('/admin')->with('success', 'Admin berhasil dihapus!');
    }
}