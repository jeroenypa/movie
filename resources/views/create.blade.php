@extends('layouts.main')

@section('content')
<div class="form-container">
    <form action="/create" method="POST">
        @csrf
        <div class="form-container-item">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="title"><br>
        </div>
        <div class="form-container-item">
            <label for="body">Body:</label>
            <textarea name="body" cols="30" rows="10" placeholder="body"></textarea>
        </div>

        <button>Send</button>
    </form>
</div>

@endsection
