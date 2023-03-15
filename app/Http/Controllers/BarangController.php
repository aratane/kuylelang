<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data['title'] = 'List Barang Lelang';
        $barang = Barang::latest()->paginate(5);
        return view('admin/menu/barang', compact('barang'), $data);
    }

    public function home()
    {
        $data['title'] = 'Beranda My E-Lelang';
        $home = Barang::latest()->paginate(6);
        $testi = User::latest()->paginate(6);
        return view('home', compact('home', 'testi'), $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $data['title'] = 'List Barang Lelang';
        return view('admin/menu/addbarang', $data);
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
            'foto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_barang'     => 'required|min:5',
            'tgl'   => 'required',
            'harga_awal'   => 'required',
            'deskripsi_barang'   => 'required',
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
        ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        return view('admin/menu/editbarang', compact('barang'), $data);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Barang $barang)
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_barang'     => 'required|min:5',
            'tgl'   => 'required',
            'harga_awal'   => 'required',
            'deskripsi_barang'   => 'required',
        ]);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $image = $request->file('foto');
            $image->storeAs('public/barang', $image->hashName());

            //delete old image
            Storage::delete('public/barang/' . $barang->foto);

            //update post with new image
            $barang->update([
                'foto'     => $image->hashName(),
                'nama_barang'     => $request->nama_barang,
                'tgl'   => $request->tgl,
                'harga_awal'   => $request->harga_awal,
                'deskripsi_barang'   => $request->deskripsi_barang,
            ]);
        } else {

            //update post without image
            $barang->update([
                'nama_barang'     => $request->nama_barang,
                'tgl'   => $request->tgl,
                'harga_awal'   => $request->harga_awal,
                'deskripsi_barang'   => $request->deskripsi_barang,
            ]);
        }

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Barang $barang)
    {
        //delete image
        Storage::delete('public/barang/' . $barang->foto);

        //delete post
        $barang->delete();

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
