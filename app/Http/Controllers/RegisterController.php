<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request){
       $input =  $request->validate([
            'name' => 'required',
            'kota' => 'required',
            'tgl' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'phone' => 'required|max:13',
            'tamatan' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        //membuat enkripsi password dengan metode 2 tapi sama" bcrypt
        // $input['password'] = bcrypt($input['password']);
        $input['password'] = Hash::make($input['password']);
        User::create($input);

        
        return redirect("/login")->with('success', 'Registrasi akun berhasil!, silahkan login');
    }
}
