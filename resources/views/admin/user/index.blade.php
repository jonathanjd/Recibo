@extends('admin.template.base')

@section('title', 'Lista de Usuarios' )

@section('content')


  <p>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Usuario"></a>
  </p>

<!--Buscador de Usuarios -->
{!! Form::open(['route' => 'admin.user.index','method' => 'GET']) !!}

<div class="form-group">
  <div class="input-group">
    {!! Form::text('buscar',null,['class' => 'form-control','placeholder'=>'Buscar Usuarios']) !!}
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Buscar Usuario"> <i class="glyphicon glyphicon-search"></i> </button>
    </span>
  </div>
</div>

{!! Form::close() !!}
<!--Fin Buscador de Usuarios -->
<div class="panel panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title">Lista de Usuarios</h3>
  </div>
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
             Nombre
          </th>
          <th>
            Correo
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>
              {{ $user->id }}
            </td>
            <td>
              {{ $user->name }}
            </td>
            <td>
              {{ $user->email }}
            </td>
            <td>
              <a href="{{ route('admin.user.show', $user) }}" class="btn btn-info glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="bottom" title="Ver Usuario"></a>
            </td>
            <td>
              <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Usuario"></a>
            </td>
            <td>
              <a href="{{ route('admin.user.delete', $user) }}" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Usuario"></a>
            </td>
          </tr>
        @endforeach

      </tbody>

    </table>
  </div>
</div>

<p>
  <a href="{{ route('admin.user.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Usuario"></a>
</p>

{{ $users->links() }}

@endsection


@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection
