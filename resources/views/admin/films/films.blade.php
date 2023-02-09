@extends('layouts.main')

@section('content')
@section('title', 'Books')


<div class="col-sm-12 my-4">
    <form action="{{route('createFilm')}}">
        <button type="submit" class="btn btn-success">Add+</button>
    </form>
    <table class="table mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Director</th>
                <th>Genre</th>
                <th>Actor</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($film as $films)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td><img src="{{asset("assets/images/". $films->cover)}}" style="height:100px; width:90px; object-fit: cover;"></td>
                <td>{{$films->judul}}</td>
                <td>{{$films->sutradara}}</td>
                <td>{{$films->genre}}</td>
                <td>{{$films->pemain}}</td>
                <td>
                    <form action="{{route('deleteFilm', $films->id)}}" method="post">
                        @csrf
                        <a href="{{route('editFilm', $films->id)}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>

@endsection