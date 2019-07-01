<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//no olvidar el namespace
use App\Actor;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actors = Actor::all();

      return view('front.Actor.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.Actor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validacion, recibe un array con mis criterios de validacion
      $request->validate([
      // input_name=>reglas;
      'name'=>'required | max:15',
      'last_name'=>'required'
    ], [
      //input_name.rule=>message
      // 'title.required'=>'el campo titulo es obligatorio',
      // 'rating.required'=>'el campo titulo es obligatorio'
      'required'=>'El campo :attribute es obligatorio',
      'title.max'=>'El campo :attribute tiene que tener como máx 15 caracteres'

    ]);

    return view('front.Actor.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showActors($id)
    {
      $theActor = Actor::find($id);
      return view('front.Actor.show', compact('theActor'));
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
        //$actor->id
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

    public function search(){


    }

    public function result(){


    }
}
