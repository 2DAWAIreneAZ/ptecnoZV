@extends('layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h2>{{ $piso['nombre'] }}</h2>
    <p><b>Dirección:</b> {{ $piso['direccion'] }}</p>
    <p><b>Metros:</b> {{ $piso['metros'] }} m²</p>
    <p><b>Precio:</b> {{ $piso['precio'] }} €</p>
    <a href="{{ url('/') }}" class="btn btn-secondary">Volver al listado</a>
  </div>
</div>
@endsection
