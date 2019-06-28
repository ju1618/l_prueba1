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
//
// Route::get('/miPrimerRuta', function () {
//     return 'Creé mi primer ruta en Laravel';
// });

// Route::get('/resultado/{numero}/{multiplica?}', function ($numero, $multiplica=null) {
//   if ($multiplica){
//     $producto = $numero*$multiplica;
//     return "Los numeros son $numero y $multiplica, y el resultado de su producto es $producto";
//   } else{
//     if ($numero%2==0){
//       return "El número $numero es par";
//     }else {
//       return "El número $numero es impar";
//     }
//   }
// });

Route::get('/movies/detail/{id}', 'MoviesController@searchMovieById');

Route::get('/movies/find/{name}', 'MoviesController@findMovieByName');

Route::get('/pelis', function () {
    return view('movies');
});

// Route::get('/movies', function () {
//     //voy al namespace y ejecuto el metodo all
//     $allMovies = \App\Movies::all();
//
//     return $allMovies;
// });

Route::get('/actors', 'ActorsController@index');

Route::get('/actors/{id}', 'ActorsController@showActors');

Route::get('/actors/search', 'ActorsController@search');

Route::get('/actors/result/{request}', 'ActorsController@result');

Route::get('/movies', 'MoviesController@index');

Route::get('/movies/{id}', 'MoviesController@showMovies');

Route::get('/genres', 'GenresControlles@index');
