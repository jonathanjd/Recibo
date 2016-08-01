@extends('admin.template.base')

@section('title', 'Eliminar Cliente')

@section('content')

  <p>
    <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
  </p>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Eliminar Cliente #{{ $cliente->cedula }}</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.cliente.destroy',$cliente->id],'method' => 'DELETE']) !!}
      <p>
        Deseas <strong>Eliminar</strong> el <strong>Cliente: {{  $cliente->nombre . ' ' . $cliente->apellido }}</strong>
      </p>
      <div class="form-group">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>

    {!! Form::close() !!}
  </div>
</div>
<p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>

@endsection
