<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lelang;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data['title'] = 'List Barang Lelang';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap'));
        return view('admin/menu/lelang', compact('barang'), $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $data['title'] = 'List Barang Lelang';
        $user = User::latest()->paginate(5);

        $barang = Barang::join('tb_masyarakat', 'barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_petugas', 'tb_barang.id_petugas', '=', 'tb_petugas.id_petugas')
            ->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap'));

        return view('admin/menu/addlelang', compact('barang', 'user'), $data);
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
            'id_barang'     => 'required',
            'tgl_lelang'     => 'required',
            'harga_akhir'     => 'required',
            'id_user'     => 'required',
            'id_petugas' => 'required',
            'status'     => 'required',
        ]);
        //create post
        Barang::create([
            'id_barang'     => $request->id_barang,
            'tgl_lelang'     => $request->tgl_lelang,
            'harga_akhir'     => $request->harga_akhir,
            'id_user'   => $request->id_user,
            'id_petugas'   => $request->id_petugas,
            'status'     => $request->status,
        ]);

        return redirect()->route('lelang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Barang $barang)
    {
        $data['title'] = 'Edit Barang Lelang';
        $user = User::all();
        return view('admin/menu/editlelang', compact('barang', 'user'), $data);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Lelang $lelang)
    {
        //validate form
        $this->validate($request, [
            'id_barang'     => 'required',
            'tgl_lelang'     => 'required',
            'harga_akhir'     => 'required',
            'id_user' => 'nullable',
            'id_petugas' => 'required',
            'status'     => 'required',
        ]);

        //update post without image
        $lelang->update([
            'id_barang'     => $request->id_barang,
            'tgl_lelang'     => $request->tgl_lelang,
            'harga_akhir'     => $request->harga_akhir,
            'id_user'   => $request->id_user,
            'id_petugas'   => $request->id_petugas,
            'status'   => $request->status,
        ]);

        //redirect to index
        return redirect()->route('lelang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Lelang $lelang)
    {
        //delete post
        $lelang->delete();

        //redirect to index
        return redirect()->route('lelang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
