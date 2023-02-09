<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function films()
    {
        $film = Film::get();
        return view('admin.films.films', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFilm(Request $request)
    {
        return view('admin.films.create-film');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFilm(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'genre' => 'required',
            'sutradara' => 'required',
            'pemain' => 'required',
            'sinopsis' => 'required',
            'cover' => 'required',
        ]);

        Film::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'genre' => $request->genre,
            'sutradara' => $request->sutradara,
            'pemain' => $request->pemain,
            'sinopsis' => $request->sinopsis,
            'cover' => $request->cover,
        ]);
        return redirect('films');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function editFilm(Film $film, $id)
    {
        $film = Film::where('id', $id)->first();
        return view('admin.films.edit-film', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function updateFilm(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $film = Film::where('id', $id)->first();

        $film->update($request->all());
        return redirect('films');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function deleteFilm(Film $film, $id)
    {
        Film::where('id', $id)->delete();
        return redirect('films');
    }
}
