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
        $user = new UserModel();

        $user->name = $request->nama;
        $user->nama = $request->nama;
        $user->nim = $request->npm;
        $user->kelas_id = $request->kelas_id;

        $user->save();

        return redirect('/user');
    }

    public function index()
    {
        $users = UserModel::getUser();

        return view('list_user', compact('users'));
    }
}