<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('pages.admin.kategori.list', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $filename = sprintf('%s_%s.%s', date('Y-m-d'), md5(microtime(true)), $file->extension());
        $image_path = $file->move('storage/kategori', $filename);

        Kategori::create([
            'image' => $image_path,
            'kategori_name' => $request->kategori_name
        ]);

        return redirect()->route('admin.kategori')->with(['success' => 'kategori has been created']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $produks = Produk::all()->where('kategori_id');
        return view('pages.admin.kategori.show', compact('kategoris', 'produks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
