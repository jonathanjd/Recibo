@extends('admin.template.base')

@section('title','Editar Cliente')

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

  <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title">Editar Cliente #{{ $cliente->cedula }}</h3>
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => ['admin.cliente.update',$cliente->id],'method' => 'PUT']) !!}

        <div class="form-group">
          {!! Form::label('nombre', 'Nombre') !!}
          {!! Form::text('nombre', $cliente->nombre,['class' => 'form-control','placeholder' => 'Nombre Cliente','required']); !!}
        </div>

        <div class="form-group">
          {!! Form::label('apellido', 'Apellido') !!}
          {!! Form::text('apellido', $cliente->apellido,['class' => 'form-control','placeholder' => 'Apellido Cliente','required']); !!}
        </div>

        <div class="form-group">
          {!! Form::label('telefono_uno', 'Telefono Nº1') !!}
          {!! Form::text('telefono_uno', $cliente->telefono_uno,['class' => 'form-control','placeholder' => 'Telefono Cliente','required']); !!}
        </div>

        <div class="form-group">
          {!! Form::label('telefono_dos', 'Telefono Nº2') !!}
          {!! Form::text('telefono_dos', $cliente->telefono_dos,['class' => 'form-control','placeholder' => 'Telefono Cliente','required']); !!}
        </div>

        <div class="form-group">
        <div class="">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-warning">Editar</button>
        </div>
      </div>

      {!! Form::close() !!}
    </div>
  </div>

  <p>
    <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
  </p>

@endsection
