<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){

        if($user = Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('admin');
            }else if ($user->role == 'hrd'){
                return redirect()->intended('hrd');
            }else{
                return redirect()->intended('user');
            }
        }

        return view("login.index", [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if(auth()->user()->role == "admin"){
                return redirect()->intended('admin');
            }elseif(auth()->user()->role == "hrd"){
                return redirect()->intended('hrd');
            }else{
                return redirect()->intended('user');
            }

        }

        return back()->with('loginError', 'Maaf tolong dipastikan email dan passwordnya benar !');
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
