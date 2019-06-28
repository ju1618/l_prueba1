@extends('front.template')

@section('pageTitle', 'Perfil de '.$theActor->getFullName());

@section('mainContent')

<h2>Perfil de {{ $theActor->getFullName() }}</h2>
<p><b>Rating: </b>{{ $theActor->rating }}</p>

@endsection
