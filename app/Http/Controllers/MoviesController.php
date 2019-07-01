<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{

	 /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $movies = Movie::all(); /*llamado al modelo y traigo todas las peliculas*/

    return view('front.Movie.index', compact('movies'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('front.Movie.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) //inyeccion de dependencias
  {
    //validacion, recibe un array con mis criterios de validacion
    $request->validate([
    // input_name=>reglas;
    'title'=>'required | max:15',
    'rating'=>'required | numeric | min:0 | max:10'
  ], [
    //input_name.rule=>message
    // 'title.required'=>'el campo titulo es obligatorio',
    // 'rating.required'=>'el campo titulo es obligatorio'
    'required'=>'El campo :attribute es obligatorio',
    'title.max'=>'El campo :attribute tiene que tener como máx 15 caracteres',
    'rating.numeric'=>'El campo :attribute tiene que ser un número',
    'rating.min'=>'El campo :attribute tiene que ser como mínimo 0',
    'rating.max'=>'El campo :attribute tiene que ser como máximo 10',

  ]);

  return view('front.Movie.create');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showMovies($id)
  {
    $theMovie = Movie::find($id);

    return view('front.Movie.show', compact('theMovie'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
