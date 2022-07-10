@extends('layouts.main')

@section('content')

    <div class="index-container">
        <div class="index-popular-movies">
            <h2>Popular movies</h2>
        </div>
        <div class="index-grid">
            @foreach($popularMovies as $popularMovie)
               <x-movie-card :popularMovie="$popularMovie" :genres="$genres" />
            @endforeach
        </div>
    </div>

@endsection
