<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index() {
        $data['title'] = 'Login Admin';
        return view('admin/login', $data);
    }
    public function adminregister()
    {
        $data['title'] = 'Register';
        return view('admin/register', $data);
    }

    public function adminregister_action(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required|unique:tb_petugas',
            'id_level' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new Petugas([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'id_level' => $request->id_level,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silakan Login!');
    }

    public function adminlogin()
    {
        $data['title'] = 'Login';
        return view('admin/login', $data);
    }

    public function adminlogin_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['password' => 'Wrong username or password!']);
    }

    public function pengaturan()
    {
        $data['title'] = 'Pengaturan';
        return view('admin/menu/pengaturan', $data);
    }

    public function password()
    {
        $data['title'] = 'Ganti Password';
        return view('admin/menu/password', $data);
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('admin/dashboard', $data);
    }
}
