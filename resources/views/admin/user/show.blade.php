@extends('admin.template.base')

@section('title', 'Mostrar Usuario')

@section('content')

<p>
  <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Regresar</a>
</p>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Mostrar Usuario</h3>
  </div>
  <div class="panel-body">
    <p>
      <strong>Nombre: </strong> {{ $user->name }}
    </p>
    <p>
      <strong>Correo Electronico: </strong> {{ $user->email }}
    </p>
  </div>
</div>

<p>
  <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Regresar</a>
</p>
@endsection
