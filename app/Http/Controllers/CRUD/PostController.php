<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
       return view("dashboard.loker", [
        "title" => "Loker"
       ], compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.addpost", [
            "title" => "Add Post"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'bagian' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'deskripsi' => 'required',
            'jamkerja' => 'required',
        ]);
        $input = $request->all();
        Post::create($input);

        return redirect("admin/post")->with('success', 'Data berhsil ditambahkan');
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
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect("/admin/post")->with('error', 'Data telah dihapus');
    }
}
