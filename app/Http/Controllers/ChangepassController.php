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

    public function aksiupdate(Request $request){
      $request->validate([
        'name' => 'required',
        'kota' => 'required',
        'tgl' => 'required',
        'alamat' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'tamatan' => 'required',
        'email' => 'required|email:dns',
        'photo' => 'required',
      ]);

       User::whereId(auth()->user()->id)->update([
        'name' => $request->name,
        'kota' => $request->kota,
        'tgl' => $request->tgl,
        'alamat' => $request->alamat,
        'gender' => $request->gender,
        'phone' => $request->phone,
        'tamatan' => $request->tamatan,
        'email' => $request->email,
        'photo' => $request->photo
       ]);
       $image = $request->file('photo')->store('image');
       return back()->with('success', 'update data diri selesai');
    }
    
}
