<?php

namespace App\Http\Controllers\user;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('pages.user.home', compact('kategoris'));
    }

    public function show($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $produks = Produk::all()->where('kategori_id');
        return view('pages.user.produk', compact('kategoris', 'produks'));
    }
}
