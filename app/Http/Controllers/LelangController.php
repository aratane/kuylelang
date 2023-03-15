<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
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
        //get posts
        $lelang = Lelang::latest()->paginate(5);

        //render view with posts
        return view('lelang.index', compact('lelang'));
    }
}
