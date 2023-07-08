<?php

namespace App\Http\Controllers;

use App\Models\Melamar;
use App\Models\Post;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('user.index', [
            'title' => 'Dashboard'
        ], compact('post'));
    }
    public function profile(){
        return view('user.profile', [
            'title' => 'My profile'
        ]);
    }
    public function detail(Post $post){
        return view("user.detail", [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
    public function notif(){
        $data = Melamar::where('user_id', Auth::id())->get();
        return view("user.notif", [
            "title" => "Notifikasi",
            "data" => $data
        ]);
    }
    public function apply(Post $post){
        return view("user.apply", [
            "title" => "Lamar",
            "post" => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'berkas' => 'required|mimes:pdf,doc,docx',
            'post_id' => 'required',
        ]);
        $validateData['user_id'] = auth()->user()->id;

        $validateData['berkas'] = $request->file('berkas')->store('public/pdf');
        $validateData['berkas'] = $request->file('berkas')->hashName();
        // $path = Storage::putFile('pdf', $request->file('berkas'));
        Melamar::create($validateData);

        return back()->with('upload', 'Data berhasil diupload');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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
