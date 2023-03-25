<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lelang;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $barang = Lelang::join('tb_masyarakat', 'tb_lelang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_petugas', 'tb_lelang.id_petugas', '=', 'tb_petugas.id_petugas')
            ->join('tb_barang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
            ->paginate(5, array('tb_lelang.*', 'tb_masyarakat.nama_lengkap', 'tb_petugas.nama_petugas', 'tb_barang.nama_barang'));
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

        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')->paginate(100, array('tb_barang.*', 'tb_masyarakat.nama_lengkap'));

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
            'harga_akhir'     => 'nullable',
            'id_user'     => 'required',
            'id_petugas' => 'required',
            'status'     => 'required',
        ]);
        //create post
        Lelang::create([
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
            'harga_akhir'     => 'nullable',
            'id_user' => 'required',
            'nama_petugas' => 'required',
            'status'     => 'required',
        ]);

        //update post without image
        $lelang->update([
            'id_barang'     => $request->id_barang,
            'tgl_lelang'     => $request->tgl_lelang,
            'harga_akhir'     => $request->harga_akhir,
            'id_user'   => $request->id_user,
            'nama_petugas'   => $request->nama_petugas,
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

    public function status(Request $request, Lelang $lelang)
    {
        $this->validate($request, [
            'id_barang'     => 'required',
            'status'     => 'required',
        ]);
        // Set ALL records to a status of 0
        DB::table('tb_lelang')->where([
            'id_barang'     => $request->id_barang,
            'status'   => $request->status,
        ])->update(['status' => 'ditutup']);

        // Set the passed record to a status of what ever is passed in the Request
        $lelang->status = $request->status;
        $lelang->save();

        return redirect()->route('lelang.index')->with(['success' => 'Lelang berhasil ditutup!']);
    }
}
