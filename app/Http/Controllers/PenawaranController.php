<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Penawaran';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_lelang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
            ->where('tb_lelang.status', '=', 'dibuka')
            ->paginate(6, array('tb_barang.*', 'tb_masyarakat.nama_lengkap'));
        return view('user.menu.penawaran', compact('barang'), $data);
    }
}
