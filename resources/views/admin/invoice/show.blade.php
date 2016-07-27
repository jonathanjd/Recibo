@extends('admin.template.base')

@section('title', 'Mostrar Cliente')

@section('content')

<p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Mostrar Cliente</h3>
  </div>
  <div class="panel-body">
    <p>
      <strong>Nombre: </strong> {{ $cliente->nombre }}
    </p>
    <p>
      <strong>Apellido: </strong> {{ $cliente->apellido }}
    </p>
    <p>
      <strong>Cedula: </strong> {{ $cliente->cedula }}
    </p>

    <p>
      <strong>Telefono N°1: </strong> {{ $cliente->telefono_uno }}
    </p>

    <p>
      <strong>Telefono N°2: </strong> {{ $cliente->telefono_dos }}
    </p>
  </div>
</div>

<p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>
@endsection
