@extends('layouts.main')

@section('content')
@section('title', 'Edit User')

<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<div class="container">
  <form action="{{route('updateFilm', $film->id)}}" method="post">
    @csrf
    <label for="judul">Name</label>
    <input type="text" id="judul" name="judul" value="{{$film->judul}}" autofocus required>
    <label for="sutradara">Director</label>
    <input type="text" id="sutradara" name="sutradara" value="{{$film->sutradara}}" required>
    <label for="genre">Genre</label>
    <input type="text" id="genre" name="genre" value="{{$film->genre}}" required>
    <label for="pemain">Actor</label>
    <input type="text" id="pemain" name="pemain" value="{{$film->pemain}}" required>
    <label for="tahun">Release Date</label>
    <input type="text" id="tahun" name="tahun" value="{{$film->tahun}}" required>
    <label for="sinopsis">Synopsis</label>
    <textarea id="sinopsis" name="sinopsis" value="{{$film->sinopsis}}" required></textarea>
    <label for="cover">Choose file for cover book:</label><br>
    <input type="file" id="cover" name="cover" required>
    <input type="submit" value="Submit">
  </form>
</div>


@endsection