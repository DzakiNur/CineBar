<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function users(){
        $user = User::get();
        return view('admin.users.users', compact('user'));
    }

    public function deleteUser(Request  $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('users'));
    }

    public function editUser($id){
        $user = User::where('id', $id)->first();
        return view('admin.users.edit-user', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::where('id', $id)->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect(route('users'))->with('edit', 'Berhasil edit data user');
    }
}
