
@extends('front.template')

@section('pageTitle', 'Agregar Actor')

@section('mainContent')

<h3>Formulario para agregar un actor</h3>
{{-- @if (count($errors))
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error}}</li>

    @endforeach
  </ul>

@endif --}}

<form class="" action="/actors/add" method="get">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-4">
      <div class="form-group">
        <label for="">Nombre</label>
        <input
        type="text"
        name="name"
        value="{{ $errors->first('name') ? null : old('name')}}"
        class="form-control"
        >
        @if ($errors->has('name'))
          <span class='text-danger'>
            {{$errors->first('name')}}
          </span>
        @endif
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="">Apellido</label>
        <input
        type="text"
        name="last_name"
        value="{{ $errors->first('last_name') ? null : old('last_name')}}"
        class="form-control"
        >
        @if ($errors->has('last_name'))
          <span class='text-danger'>
            {{$errors->first('last_name')}}
          </span>
        @endif
      </div>
    </div>
    <div class="col-12">
      {{-- boton de submit --}}
      <button type="submit" name="button" class = "btn btn-outline-info">Agregar</button>
    </div>
  </div>

</form>

@endsection
