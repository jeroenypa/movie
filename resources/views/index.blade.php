@extends('layouts.main')

@section('content')

    <div class="index-container">
        <div class="index-popular-movies">
            <h2>Popular movies</h2>
        </div>
        <div class="index-grid">
            @foreach($popularMovies as $popularMovie)
                <div class="index-grid-item">
                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path']}}" alt="pic">
                    <h3 class="index-movie-title">{{ $popularMovie['title'] }}</h3>
                    <p class="index-movie-text">{{ $popularMovie['overview'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
