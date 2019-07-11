@extends('front.template')

@section('pageTitle', 'Listado de peliculas')

@section('mainContent')

  <ul>
    @foreach ($movies as $movie)
      <li>
        @php
          $titleAndRating = $movie->getTitleAndRating();
        @endphp
        <a href="/movies/{{ $movie->id }}" class="">{{ $titleAndRating[0] }}</a>
        <b>{{ $titleAndRating[1] }}</b>
      </li>
      <br>
    @endforeach
  </ul>

@endsection


{{-- @extends('front.template')

@section('pageTitle', 'Listado de películas')

@section('mainContent')
	<h2>Listado de películas</h2>
	<p>En nuestra base de datos hay un total de {{ count($movies) }} películas.</p>
	<a href="/movies/create" class="btn btn-success">crear película</a>

	<ul>
		@foreach ($movies as $movie)
			<li>
				<a href="/movies/{{ $movie->id }}"> {{ $movie->title }} </a>
			</li>
		@endforeach
	</ul>
@endsection --}}
