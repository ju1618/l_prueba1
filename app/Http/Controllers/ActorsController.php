<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
			// $actors = Actor::all();
      //
			// return view('front.Actor.index', compact('actors'));

      $actors = Actor::paginate(5);
  		$totalActors = count(Actor::all());

  		return view('front/Actors/index', compact('actors', 'totalActors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $theActor = Actor::find($id);

			return view('front.Actors.show', compact('theActor'));
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

		public function search()
		{
			return view('front.Actors.search');
		}

		public function result(Request $request)
		{
			$actors = Actor::where('first_name', 'LIKE', '%' . $request->word . '%')->get();

			return view('front.Actors.result', compact('actors'));
		}
}
