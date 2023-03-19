<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Barang;
use App\Models\Lelang;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_petugas', 'tb_barang.id_petugas', '=', 'tb_petugas.id_petugas')
            ->where('tb_barang.id_petugas', '>', 0)
            ->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap', 'tb_petugas.nama_petugas'));

        $totalbarang = Barang::where('id_petugas', '>', 0)->count();
        $lelangaktif = Lelang::where('status', '=', 'dibuka')->count();
        $jumlahuser = User::count();
        $jumlahpetugas = Petugas::where('id_petugas', '>', 0)->count();

        $status = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_petugas', 'tb_barang.id_petugas', '=', 'tb_petugas.id_petugas')
            ->where('tb_barang.id_petugas', '=', 0)
            ->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap', 'tb_petugas.nama_petugas'));
        return view('admin/dashboard', compact('barang', 'status', 'totalbarang', 'lelangaktif', 'jumlahuser', 'jumlahpetugas'), $data);
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

        $user = Admin::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password Berhasil Diganti!');
    }

    public function bukalelang()
    {
    }
}
