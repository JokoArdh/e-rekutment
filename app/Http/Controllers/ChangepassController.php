<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangepassController extends Controller
{
    //
    public function index(){
        return view('user.changepass', [
            'title' => 'Ubah Password'
        ]);
    }
    public function updatepass(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if(!Hash::check($request->current_password, auth()->user()->password)){
            return back()->with('erorpass', 'password tidak sesuai yang lama');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with('success', 'password telah berhasil diupdate');

    }

    public function ubahprofile(){
        return view('user.ubahprofile',[
            'title' => 'Ubah Profile'
        ]);
    }
    
}
