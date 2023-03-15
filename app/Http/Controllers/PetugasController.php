<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{
    public function pengaturan()
    {
        $data['title'] = 'Pengaturan';
        return view('petugas/menu/pengaturan', $data);
    }

    public function password()
    {
        $data['title'] = 'Ganti Password';
        return view('petugas/menu/password', $data);
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

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data['title'] = 'List Data Petugas';
        $petugas = Petugas::join('tb_level', 'tb_petugas.id_level', '=', 'tb_level.id_level')->paginate(5, array('tb_petugas.*', 'tb_level.level'));
        return view('admin/menu/petugas', compact('petugas'), $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $level = Level::all();
        $data['title'] = 'List Akun Petugas';
        return view('admin/menu/addpetugas', compact('level'), $data);
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
            'nama_petugas'     => 'required|min:5',
            'username'   => 'required|unique:tb_petugas',
            'password'   => 'required',
            'id_level'   => 'required',
        ]);

        //create post
        Petugas::create([
            'nama_petugas'  => $request->nama_petugas,
            'username'   => $request->username,
            'password' => Hash::make($request->password),
            'id_level'   => $request->id_level,
        ]);

        return redirect()->route('petugas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Petugas $petugas)
    {
        $data['title'] = 'Edit Petugas';
        return view('admin/menu/editpetugas', compact('petugas'), $data);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Petugas $petugas)
    {
        //validate form
        $this->validate($request, [
            'nama_petugas'     => 'required|min:5',
            'username'   => 'required|unique:tb_petugas',
            'password'   => 'required',
            'id_level'   => 'required',
        ]);

        $petugas->update([
            'nama_petugas'     => $request->nama_petugas,
            'username'   => $request->username,
            'password' => Hash::make($request->password),
            'id_level'   => $request->id_level,
        ]);


        //redirect to index
        return redirect()->route('petugas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Petugas $petugas)
    {
        //delete post
        $petugas->delete();

        //redirect to index
        return redirect()->route('petugas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
