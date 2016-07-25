@extends('admin.template.base')

@section('title','Editar Usuario')

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

  <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title">Editar Usuario</h3>
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => ['admin.user.update',$user->id],'method' => 'PUT']) !!}

        <div class="form-group">
          {!! Form::label('name', 'Nombre') !!}
          {!! Form::text('name', $user->name,['class' => 'form-control','placeholder' => 'Nombre Completo','required']); !!}
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
    <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Regresar</a>
  </p>

@endsection
