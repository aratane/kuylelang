<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        $data['title'] = 'Pengajuan Lelang';
        $user = User::all();
        return view('user/menu/pengajuan', compact('user'), $data);
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_barang'     => 'required|min:5',
            'tgl'   => 'required',
            'harga_awal'   => 'required',
            'deskripsi_barang'   => 'required',
            'id_user' => 'required',
            'nama_petugas' => 'nullable',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/barang', $image->hashName());

        //create post
        Barang::create([
            'foto'     => $image->hashName(),
            'nama_barang'     => $request->nama_barang,
            'tgl'   => $request->tgl,
            'harga_awal'   => $request->harga_awal,
            'deskripsi_barang'   => $request->deskripsi_barang,
            'id_user'   => $request->id_user,
            'nama_petugas'   => $request->nama_petugas,
        ]);

        return redirect()->route('pengajuan.create')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
