<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admn.slider', [
            'title' => 'Data Slider'
        ], compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admn.create',[
            'title' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image'
        ]);
        $input = $request->all();

        if($image = $request->file('image')){
            $path = 'image/';
            $imageName = date('Ymd'). "." . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        Slider::create($input);
        
        return redirect("/admin/slider")->with('message', 'Data berhasil ditambahkan');
        // dd($request);
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
