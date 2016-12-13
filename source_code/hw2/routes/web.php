<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('user', 'UserController');
Route::resource('pokemon.owned', 'OwnedController');
Route::resource('pokemon.user', 'UserController');
Route::resource('pokemon', 'PokemonController');
Route::resource('user.captured', 'CapturedController');
Route::resource('user.pokemon', 'PokemonController');
Route::resource('add', 'AddController');
Route::resource('userpokemon', 'UserPokemonController');
Route::get('droppokemon', 'CapturedController@store');
Route::get('delete/{id}', 'AddController@delete');
Route::get('search', 'PokemonController@search');
Route::get('searchPokemon', 'PokemonController@searchPokemon');

Route::get('/home', 'HomeController@index');

