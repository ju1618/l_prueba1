@extends('front.template')

@section('pageTitle', 'Detalle de '. $theMovie->title);

@section('mainContent')

<h2>Detalle de {{ $theMovie->title }}</h2>
<p><b>Rating: </b>{{ $theMovie->rating }}</p>
<p><b>Duracion: </b>{{ $theMovie->length }}</p>
<p><b>Premios: </b>{{ $theMovie->awards }}</p>

@endsection
