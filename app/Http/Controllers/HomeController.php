<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("frontend.index", [
            "title" => "Bussiness PT.BWK Indomandiri Lestari",
            "service" => Service::all()
        ]);
        
    }
    public function about()
    {
        $about = About::all();
        return view("frontend.about", [
            "title" => "About"
        ], compact('about'));
        
    }
    public function service()
    {
        //
        return view("frontend.service", [
            "title" => "Service",
            "service" => Service::all(),
            "produk" => Produk::all()
        ]);
        
    }
    public function galery()
    {
        //
        return view("frontend.galery", [
            "title" => "Galery"
        ]);
        
    }
    public function info()
    {
        $post = Post::latest()->paginate(3);
        return view("frontend.blog", [
            "title" => "Loker",
        ], compact('post'));
    }
    public function kontak()
    {
        //
        return view("frontend.kontak", [
            "title" => "Contact"
        ]);
        
    }

    public function detail(Post $post){
        return view("single.detail", [
            "title" => "Single Post",
            "post" => $post
        ]);

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
