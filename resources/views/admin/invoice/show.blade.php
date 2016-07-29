@extends('admin.template.base')

@section('title', 'Mostrar Factura')

@section('content')

<p>
  <a href="{{ route('admin.invoice.index') }}" class="btn btn-primary">Regresar</a>
</p>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Mostrar Factura</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Factura</h3>
        </div>
        <div class="panel-body">
          <p>
            <strong>Nº Factura:</strong>{{ $invoice->id }}
          </p>
          <p>
            <strong>Fecha:</strong>{{ $invoice->created_at->format('d/m/Y') }}
          </p>
          <p>
            <strong>Creado por:</strong>{{ $invoice->user->name }}
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Cliente</h3>
        </div>
        <div class="panel-body">
          <p>
            <strong>Nombre:</strong>{{ $invoice->cliente->nombre }}
          </p>
          <p>
            <strong>Cliente:</strong>{{ $invoice->cliente->apellido }}
          </p>
          <p>
            <strong>Cedula:</strong>{{ $invoice->cliente->cedula }}
          </p>
          <p>
            <strong>Telefono Nº1:</strong>{{ $invoice->cliente->telefono_uno }}
          </p>
          <p>
            <strong>Telefono Nº2:</strong>{{ $invoice->cliente->telefono_dos }}
          </p>

        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Detalles de Factura</h3>
        </div>
        <div class="panel-body">
          <p>
            Contenido Detalle...
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Crear Detalle de Factura</h3>
        </div>
        <div class="panel-body">
          <p>
            Contenido Crear Detalle...
          </p>
        </div>
      </div>
    </div>



  </div>
</div>
  



<p>
  <a href="{{ route('admin.invoice.index') }}" class="btn btn-primary">Regresar</a>
</p>
@endsection
