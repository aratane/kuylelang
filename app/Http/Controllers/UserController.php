<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function pengaturan()
    {
        $data['title'] = 'Pengaturan';
        return view('user/menu/pengaturan', $data);
    }

    public function password()
    {
        $data['title'] = 'Ganti Password';
        return view('user/menu/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);

        $user = User::find(Auth::id());
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
        $data['title'] = 'Dashboard Masyarakat';
        $barang = Barang::join('tb_masyarakat', 'tb_barang.id_user', '=', 'tb_masyarakat.id_user')
            ->join('tb_petugas', 'tb_barang.id_petugas', '=', 'tb_petugas.id_petugas')
            ->where('tb_barang.id_petugas', '>', 0)
            ->paginate(5, array('tb_barang.*', 'tb_masyarakat.nama_lengkap', 'tb_petugas.nama_petugas'));
        return view('user.dashboard', compact('barang'), $data);
    }

    public function list()
    {
        $data['title'] = 'List Data Masyarakat';
        $user = User::latest()->paginate(5);
        return view('admin.menu.user', compact('user'), $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $data['title'] = 'List user';
        return view('admin/menu/adduser', $data);
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
            'nama_lengkap'     => 'required|min:5',
            'username'   => 'required|unique:tb_masyarakat',
            'password'   => 'required',
            'telp'   => 'required',
        ]);

        //create post
        User::create([
            'nama_lengkap'  => $request->nama_lengkap,
            'username'   => $request->username,
            'password' => Hash::make($request->password),
            'telp'   => $request->telp,
        ]);

        return redirect()->route('userlist')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(User $user)
    {
        $data['title'] = 'Edit user';
        return view('admin/menu/edituser', compact('user'), $data);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, User $user)
    {
        //validate form
        $this->validate($request, [
            'nama_lengkap'     => 'required|min:5',
            'username'   => 'required|unique:tb_masyarakat',
            'telp'   => 'required',
        ]);

        $user->update([
            'nama_lengkap'     => $request->nama_lengkap,
            'username'   => $request->username,
            'telp'   => $request->telp,
        ]);

        //redirect to index
        return redirect()->route('userlist')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(User $user)
    {
        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('userlist')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
