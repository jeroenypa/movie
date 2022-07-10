<div class="index-grid-item">
    <a href="{{route('movies.show', $popularMovie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path']}}" alt="pic">
        <h3 class="index-movie-title">{{ $popularMovie['title'] }}</h3>
        @foreach($popularMovie['genre_ids'] as $genre)
            <p class="index-movie-genre">{{ $genres->get($genre) }}@if (!$loop->last) , @endif</p>
        @endforeach
        <p class="index-movie-text">{{ $popularMovie['overview'] }}</p>
    </a>
</div>
