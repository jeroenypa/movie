<?php


use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/', 'App\Http\Controllers\MovieController@index')->name('movies.index');
Route::get('/movies/{movie}', 'App\Http\Controllers\MovieController@show')->name('movies.show');
Route::get('/create', function (){
    return view('create');
});

Route::post('/create', function() {
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();
    return redirect('/');
});

