<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('level')->get();
        return view('admin.datapengguna', [
            "title" => "Data Pengguna",
            "sesi" => "DATA PENGGUNA",
        ], compact('user'));
    }

    public function create()
    {
        $user = User::all();
        $divisi = Divisi::all();
        return view('admin.newdatapengguna', [
            "title" => "Tambah Data Pengguna",
            "sesi" => "TAMBAH DATA PENGGUNA"
        ], compact('user', 'divisi'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required',
            'gender_id' => 'required',
            'divisi_id' => 'required',
            'nohp' => 'required|numeric',
            'username' => ['required', 'min:4', 'max:30', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|bcrypt',
            'level_id' => 'required',
            'address' => 'required'
        ]);
        $user = new User();
        $user->name = $validated_data['name'];
        $user->gender->gender_id = $validated_data['gender_id'];
        $user->divisi->divisi_id = $validated_data['divisi_id'];
        $user->nohp = $validated_data['nohp'];
        $user->username = $validated_data['username'];
        $user->email = $validated_data['email'];
        $user->password = $validated_data['password'];
        $user->level->level_id = $validated_data['level_id'];
        $user->address = $validated_data['address'];

        // $divisi = DB::table('divisi')->get();
        // $divisi->divisi = #

        Auth::user()->user()->save($user);

        return redirect('admin.datapengguna');
    }
}
