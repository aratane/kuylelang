<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $head['title'] = 'Dashboard Admin';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap'));

        // ChartJs
        $users = Barang::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('id_barang', 'ASC')
            ->pluck('count', 'month_name');

        $labels = $users->keys()->toArray();;
        $data = $users->values()->toArray();;
        return view('admin/dashboard', compact('barang', 'labels', 'data'), $head);
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
