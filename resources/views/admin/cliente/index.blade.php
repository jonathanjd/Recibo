@extends('admin.template.base')

@section('title', 'Lista de Clientes' )

@section('content')


  <p>
    <a href="{{ route('admin.cliente.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Cliente"></a>
  </p>


<!--Buscador de Clientes -->

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Buscar Cliente</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.cliente.index','method' => 'GET']) !!}

<div class="form-group">
  <div class="input-group">
    {!! Form::text('buscar',null,['class' => 'form-control','placeholder'=>'Buscar Clientes']) !!}
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Buscar Cliente"> <i class="glyphicon glyphicon-search"></i> </button>
    </span>
  </div>
</div>

{!! Form::close() !!}
  </div>
</div>


<!--Fin Buscador de Clientes -->



<div class="panel panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title">Lista de Clientes</h3>
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
            Apellido
          </th>
          <th>
            Cedula
          </th>
          <th>
            Telefono N°1
          </th>
          <th>
            Telefono N°2
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
          <tr>
            <td>
              {{ $cliente->id }}
            </td>
            <td>
              {{ $cliente->nombre }}
            </td>
            <td>
              {{ $cliente->apellido }}
            </td>
            <td>
              {{ $cliente->cedula }}
            </td>
            <td>
              {{ $cliente->telefono_uno }}
            </td>
            <td>
              {{ $cliente->telefono_dos }}
            </td>
            <td>
              <a href="{{ route('admin.cliente.show', $cliente) }}" class="btn btn-info glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="bottom" title="Ver Cliente"></a>
            </td>
            <td>
              <a href="{{ route('admin.cliente.edit', $cliente) }}" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Cliente"></a>
            </td>
            <td>
              <a href="{{ route('admin.cliente.delete', $cliente) }}" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Cliente"></a>
            </td>
          </tr>
        @endforeach

      </tbody>

    </table>
  </div>
</div>

<p>
  <a href="{{ route('admin.cliente.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Cliente"></a>
</p>

<div class="panel panel-default">
  <div class="panel-body">
    {{ $clientes->links() }}
  </div>
</div>



@endsection


@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection
