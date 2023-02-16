<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Review;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $review = Review::get();
        $film = Film::get();
        return view('user.home', compact(['review', 'film']));
    }
}
