<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = BukuModel::all();
        return view('buku.index',[
            'daftar_buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'cover_buku' => 'required|image|mimes:jpeg,jpg,png',
            'penulis' => 'required',
            'penerbit' => 'required',
            'deskripsi_buku' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required'
        ]);

        $cover_buku = $request->file('cover_buku');
        $cover_buku->storeAs('public/buku', $cover_buku->hashName());

        $buku = [
            'judul_buku'=>  $request->judul_buku,
            'cover_buku'=>  $cover_buku->hashName(),
            'penulis'=>  $request->penulis,
            'penerbit'=>  $request->penerbit,
            'deskripsi_buku'=> $request->deskripsi_buku,
            'tahun_terbit'=>  $request->tahun_terbit,
            'stok'=>  $request->stok
        ];

        //redirect to index
        $simpan_data = BukuModel::create($buku);
        if($simpan_data){
            return redirect()->route('buku.index')->with('success', 'Data Buku Berhasil Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuModel $bukuModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuModel $bukuModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuModel $bukuModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = BukuModel::findOrFail($id);
        Storage::delete('public/buku/'.$buku->cover_buku);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data Buku berhasil dihapus');
    }
}
