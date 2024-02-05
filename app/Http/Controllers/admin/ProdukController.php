<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('pages.admin.produk.list', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('pages.admin.produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create([
            'produk_name' => $request->produk_name,
            'deskripsi'   => $request->deskripsi,
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('admin.produk')->with(['success' => 'Produk has been created']);
    }

    /**
     * Display the specified resource.
     */
    public function download($id)
    {
        $product = Produk::find($id);
        $pdf = PDF::loadView('pages.admin.produk.pdf', compact('product'));
        $fileName = 'pdf_' . $product->produk_name . '.pdf';
        return $pdf->download($fileName);
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
