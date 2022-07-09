<?php


use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MovieController@index')->name('movies.index');
Route::get('/movies/{movie}', 'App\Http\Controllers\MovieController@show')->name('movies.show');
