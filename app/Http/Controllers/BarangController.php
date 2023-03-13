<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function barang()
    {
        $data['title'] = 'Barang';
        $barang = Barang::latest()->paginate(5);
        return view('menu.barang', compact('barang'), $data);
    }

    public function addbarang()
    {
        $data['title'] = 'Tambah Barang';
        return view('menu.addbarang', $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('menu.addbarang');
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
            'tgl'     => 'required',
            'harga_awal'     => 'required',
            'deskripsi_barang'   => 'required'
        ]);

        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/barang', $foto->hashName());

        //create post
        Barang::create([
            'foto'     => $foto->hashName(),
            'nama_barang'     => $request->nama_barang,
            'tgl'     => $request->tgl,
            'harga_awal'     => $request->harga_awal,
            'deskripsi_barang'   => $request->deskripsi_barang
        ]);

        //redirect to index
        return redirect()->route('barang')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Barang $barang)
    {
        $data['title'] = 'Barang';
        return view('menu.editbarang', compact('barang'), $data);
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
            'foto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_barang'     => 'required|min:5',
            'tgl'     => 'required',
            'harga_awal'     => 'required',
            'deskripsi_barang'   => 'required'
        ]);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/barang/', $foto->hashName());

            //delete old image
            Storage::delete('public/barang/' . $barang->foto);

            //update post with new image
            $barang->update([
                'foto'     => $foto->hashName(),
                'nama_barang'     => $request->nama_barang,
                'tgl'     => $request->tgl,
                'harga_awal'     => $request->harga_awal,
                'deskripsi_barang'   => $request->deskripsi_barang
            ]);
        } else {

            //update post without image
            $barang->update([
                'nama_barang'     => $request->nama_barang,
                'tgl'     => $request->tgl,
                'harga_awal'     => $request->harga_awal,
                'deskripsi_barang'   => $request->deskripsi_barang
            ]);
        }

        //redirect to index
        return redirect()->route('menu.barang')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Barang $barang)
    {
        //delete image
        Storage::delete('public/barang/' . $barang->foto);

        //delete post
        $barang->delete();

        //redirect to index
        return redirect()->route('barang')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
