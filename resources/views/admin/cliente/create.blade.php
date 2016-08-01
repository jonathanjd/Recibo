@extends('admin.template.base')

@section('title', 'Crear Cliente')

@section('content')

@if(count($errors) > 0)
  <div class="alert alert-dismissible alert-danger">
    <ul>
      <button type="button" class="close" data-dismiss="alert">&times;</button>

  @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
  @endforeach
    </ul>
  </div>
@endif
<p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Crear Cliente</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.cliente.store','method' => 'POST']) !!}

      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Nombre Cliente','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('apellido', 'Apellido') !!}
        {!! Form::text('apellido',null,['class' => 'form-control','placeholder' => 'Apellido Cliente','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('cedula', 'Cedula') !!}
        {!! Form::number('cedula',null,['class' => 'form-control','placeholder' => 'Cedula Cliente','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('telefono_uno', 'Telefono N°1') !!}
        {!! Form::text('telefono_uno',null,['class' => 'form-control','placeholder' => 'Telefono Cliente','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('telefono_dos', 'Telefono N°2') !!}
        {!! Form::text('telefono_dos',null,['class' => 'form-control','placeholder' => 'Telefono Cliente']); !!}
      </div>


      <div class="form-group">
      <div class="">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>

    {!! Form::close() !!}
  </div>
</div>
<p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>

@endsection
