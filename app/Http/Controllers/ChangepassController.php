<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $user = Auth::user();
        return view('user.ubahprofile',[
            'title' => 'Ubah Profile'
        ], compact('user'));
    }

    public function aksiupdate(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = [
            'name'   => $request->name,
            'kota'   => $request->kota,
            'tgl'    => $request->tgl,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'phone'  => $request->phone,
            'tamatan' => $request->tamatan
        ];

        if($request->hasFile('photo')){
            Storage::delete($user->photo);
            $foto = $request->file('photo');
            $ext = $foto->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $path = $foto->storeAs('images', $filename);
            $data['photo'] = $path;
        }
        $user->update($data);
       return redirect("user/profile")->with('success', 'update data diri selesai');
    }
}
