@extends('admin.template.base')

@section('title', 'Crear Usuario')

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
  <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Regresar</a>
</p>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Crear Usuario</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.user.store','method' => 'POST']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre Completo','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'example@gmail.com','required']); !!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password',['class' => 'form-control','placeholder' => '************','required']); !!}
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
  <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Regresar</a>
</p>

@endsection
