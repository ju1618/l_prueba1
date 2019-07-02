
@extends('front.template')

@section('pageTitle', 'Crear Pelicula')

@section('mainContent')

<h3>Formulario para crear pelicula</h3>
{{-- @if (count($errors))
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error}}</li>

    @endforeach
  </ul>

@endif --}}

<form class="" action="/movies" method="post">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="">Titulo</label>
        <input
        type="text"
        name="title"
        value="{{ $errors->first('title') ? null : old('title')}}"
        class="form-control"
        >
        @if ($errors->has('title'))
          <span class='text-danger'>
            {{$errors->first('title')}}
          </span>
        @endif
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="">Rating</label>
        <input
        type="text"
        name="rating"
        value="{{ $errors->first('rating') ? null : old('rating')}}"
        class="form-control"
        >
        @if ($errors->has('rating'))
          <span class='text-danger'>
            {{$errors->first('rating')}}
          </span>
        @endif
      </div>
    </div>
    <div class="col-12">
      {{-- boton de submit --}}
      <button type="submit" name="button" class = "btn btn-outline-info">Crear</button>
    </div>
  </div>

</form>

@endsection
