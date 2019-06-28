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
