
@extends('front.template')

@section('pageTitle', 'Index de Peliculas')

@section('mainContent')

<h2>Soy el index de Peliculas</h2>
 <p>En la DB hay un total de {{ $totalMovies }} películas</p> 
 <a href="/movies/create" class="btn btn-outline-info">Crear pelicular</a>
 <br><br>

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
{{-- muestra los links de la paginacion que puse en moviescontrolles  --}}
{{$movies->links()}}

@endsection
