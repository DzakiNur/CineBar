<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function storeLogin(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginerror', 'Login gagal, silahkan coba lagi');
    }

    public function logout(Request $request) {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('');
    }
}
