<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        $kelas = Kelas::getKelas();

        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $kelas = Kelas::where('nama_kelas', $request->kelas)->first();

        $user = new UserModel();

        $user->name = $request->nama;
        $user->nama = $request->nama;
        $user->nim = $request->nim;
        $user->kelas_id = $kelas ? $kelas->id : null;

        $user->save();

        return redirect('/user');
    }

    public function index()
    {
        $users = UserModel::getUser();

        return view('list_user', compact('users'));
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        $kelas = Kelas::getKelas();

        return view('edit_user', [
            'title' => 'Edit Pengguna',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);

        $kelas = Kelas::where('nama_kelas', $request->kelas)->first();

        $user->name = $request->nama;
        $user->nama = $request->nama;
        $user->nim = $request->nim;
        $user->kelas_id = $kelas ? $kelas->id : null;

        $user->save();

        return redirect('/user')
            ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);

        $user->delete();

        return redirect('/user')
            ->with('success', 'Data pengguna berhasil dihapus.');
    }
}