<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Histori;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Penawaran';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_lelang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
            ->where('tb_lelang.status', '=', 'dibuka')
            ->paginate(6, array('tb_barang.*', 'tb_masyarakat.*', 'tb_lelang.*'));
        return view('user.menu.penawaran', compact('barang'), $data);
    }

    public function create(Barang $barang)
    {
        $data['title'] = 'Bid Barang Lelang';
        return view('user/menu/addpenawaran', compact('barang'), $data);
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id_lelang'   => 'required',
            'id_barang'   => 'required',
            'id_user'   => 'required',
            'penawaran_harga' => 'required',
        ]);
        //create post
        Histori::create([
            'id_lelang'   => $request->id_lelang,
            'id_barang'   => $request->id_barang,
            'id_user'   => $request->id_user,
            'penawaran_harga'   => $request->penawaran_harga,
        ]);

        return redirect()->route('penawaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
