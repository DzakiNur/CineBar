@extends('layouts.main')

@section('content')
@section('title', 'Dashboard')

<h1 class="ms-3 my-4">Halo, Admin {{Auth::User()->name}}</h1>
<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" style="position: absolute; margin-left: 945px; margin-top: -55px; border: solid 2px #000; border-radius: 100px; padding: 2px 15px;">Logout</button>
</form>
<div class="row me-1 ms-1 my-2">
    <div class="col-lg-6">
        <div class="card-data book mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-film"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end align-items-end">
                    <div class="card-desc">
                        Film
                    </div>
                    <div class="card-count">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card-data user mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end align-items-end">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection