<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard Petugas';
        return view('petugas/dashboard', $data);
    }
    public function pengaturan()
    {
        $data['title'] = 'Pengaturan';
        return view('petugas/menu/pengaturan', $data);
    }

    public function password()
    {
        $data['title'] = 'Ganti Password';
        return view('petugas/menu/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);

        $user = Petugas::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password Berhasil Diganti!');
    }
}
