@extends('layouts.main')

@section('content')


<div class="show-container">
    <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="pic">
    <div>
        <h1 class="index-movie-title">{{ $movie['title'] }}</h1>
        <p class="index-movie-text">{{ $movie['overview'] }}</p>
    </div>
</div>

@endsection
