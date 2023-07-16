<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use App\Models\Melamar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DiterimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terima = Melamar::with('post', 'user')->where('status', 'terima')->get();
        return view('hrd.accept', [
            "title" => "Data Diterima",
        ], compact('terima'));
    }

    public function generate(){
        $terima = Melamar::with('post', 'user')->where('status', 'terima')->get();
        $pdf = Pdf::loadView('pdf', [
            "title" => "pdf",
            "terima" => $terima
        ]);
        return $pdf->stream('laporan.pdf');
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
