<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('dashboard.service', [
            "title" => "Data Service",
        ], compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addservice', [
            "title" => "Tambah Data"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon'      => 'required',
            'title'     => 'required',
            'deskripsi' => 'required'
        ]);
        $input = $request->all();
        Service::create($input);

        return redirect("/admin/service")->with('success', 'Data berhasil ditambahkan');
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
        $service = Service::where('id', $id)->first();
        return view('dashboard.service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::where('id', $id)->first();
        $service->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect("/admin/service")->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect("/admin/service")->with('success', 'Data telah dihapus');
    }
}
