@extends('layouts.main')

@section('content')

<div>
    <div class="show-container">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="pic">
        <div>
            <h1>{{ $movie['title'] }}</h1>
            <p class="show-movie-text">{{ $movie['overview'] }}</p>
            @foreach( $movie['credits']['crew'] as $crew)
                @if($loop->index <2 )
                    <div>
                        <h3>{{ $crew['name'] }}</h3>
                        <p>{{ $crew['job'] }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <h1 class="show-movie-title">Cast</h1>
    <div class="show-cast-container">
         @foreach( $movie['credits']['cast'] as $cast)
             @if($loop->index <5 )
             <div>
                 <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="pic">
                 <div>
                    <h3>{{ $cast['name'] }}</h3>
                    <p>{{ $cast['character'] }}</p>
                 </div>
             </div>
            @endif
        @endforeach
    </div>
</div>


@endsection
