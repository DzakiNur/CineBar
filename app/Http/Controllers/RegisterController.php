<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function storeRegister(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);
        return redirect('login');
    }
}
