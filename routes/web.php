<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba/{name}', 'PruebaController@prueba');

Route::get('/name/{name}', function ($name){
	return ('Hola soy '.$name);

});

Route::get('/mi_primera_ruta', function () {
	return ('HOLA MUNDO.');

});

Route::resource('trainer', 'TrainerController');
//Route::resource('pokemons', 'PokemonController');
Route::get('trainer/{trainer}/pokemons','PokemonController@index');
Route::post('trainer/{trainer}/pokemons','PokemonController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
