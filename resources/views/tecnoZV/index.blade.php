@extends('template')

@section('content')
<h2 class="mb-4">Pisos en venta</h2>
<div class="row">
@foreach($pisos as $piso)
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $piso['nombre'] }}</h5>
        <p class="card-text">
          <strong>Dirección:</strong> {{ $piso['direccion'] }} <br>
          <strong>Metros:</strong> {{ $piso['metros'] }} m² <br>
          <strong>Precio:</strong> {{ $piso['precio'] }} €
        </p>
        <a href="{{ url('pisos/'.$piso['id']) }}" class="btn btn-primary">Ver detalles</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
