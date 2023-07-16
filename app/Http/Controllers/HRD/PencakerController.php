<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use App\Models\Melamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PencakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $melamar = Melamar::with('post', 'user')->where('status' ,'pending')->get();
        return view('hrd.pelamar', [
            "title" => "Data Pelamar"
        ], compact('melamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $melamar = Melamar::findOrFail($id);
        return view("hrd.pelamar", compact('melamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $melamar = Melamar::findOrFail($id);
        $melamar->update([
            'status' => $request->status
        ]);
        return redirect("/hrd/pencaker")->with('success', 'Success Update');
    }

    public function download($id){
        $download = Melamar::where('id', $id)->firstOrFail();
         $path = storage_path('pdf/'.$download->berkas);
         return Storage::download($path);
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
