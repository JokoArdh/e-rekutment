<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('dashboard.jenis', [
            "title" => "Data Jenis"
        ], compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addjenis', [
            "title" => "Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'deskripsi' => 'required'
        ]);
        $input = $request->all();
        Produk::create($input);

        return redirect("/admin/jenis")->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produks = Produk::findOrFail($id);
        return view('dashboard.jenis', compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produks = Produk::findOrFail($id);
        $produks->update([
            'name' =>$request->name,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect("/admin/jenis")->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect("/admin/jenis")->with('seccess', 'Data telah dihapus');
    }
}
