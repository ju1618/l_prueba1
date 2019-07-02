
@extends('front.template')

@section('pageTitle', 'Index de actores')

@section('mainContent')

<h2>Soy el index de actores</h2>
<p>En la DB hay un total de {{ count($actors)}} actores</p>
<a href="/actors/add" class="btn btn-outline-info">Agregar actor</a>
<br><br>
<ul>
    @foreach ($actors as $actor)
      <li>
        <em>{{ $actor->getFullName() }} </em>
        <a href="/actors/{{ $actor->id }}" class="btn btn-success">ver detalle</a>
      </li>
      <br>
    @endforeach
</ul>


@endsection
