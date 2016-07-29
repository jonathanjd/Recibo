@extends('admin.template.base')

@section('title', 'Mostrar Cliente')

@section('content')

<div class="col-md-12">
  <p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>
</div>

<div class="col-md-6">
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
</div>


<div class="col-md-6">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Mis Facturas <a href="{{ route('admin.invoice.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Factura"><i class="glyphicon glyphicon-plus"></i></a> </h3>  
  </div>
  <div class="panel-body">
    <p>
      Contenido factura
    </p>
  </div>
</div>
</div>


<div class="col-md-12">
  <p>
  <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
</p>
</div>


@endsection

@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection
