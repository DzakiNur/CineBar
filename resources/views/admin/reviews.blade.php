@extends('layouts.main')

@section('content')
@section('title', 'Reviews')


<div class="col-sm-12 my-4">
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Name</th>
                <th>Review</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($review as $reviews)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$reviews->name_movie}}</td>
                <td>{{$reviews->review}}</td>
                <td>
                    <form action="{{route('deleteReview', $reviews->id)}}" method="post">
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection