@extends('layouts.main')

@section('content')

<div>
    <h1 class="updates-title">Here is your input</h1>
    <div class="updates-container">
        @foreach($articles as $article)
            <div class="updates-container-items">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->body }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
