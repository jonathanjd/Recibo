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
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Crear Factura</h3>
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => 'admin.invoice.store','method' => 'POST']) !!}
      <div class="form-group">
        @if ($lastInvoice == null) 
        {!! Form::label('nombre', 'Numero Factura: '. 1) !!} 
        @else 
        {!! Form::label('nombre', 'Numero Factura: '. $lastInvoice) !!} 
        @endif
      </div>

      {!! Form::hidden('cliente_id', $cliente->id) !!}

      {!! Form::hidden('user_id', Auth::user()->id) !!}
      

      <div class="form-group">
        {!! Form::label('nombre', 'Fecha Factura: '.$now->day.'/'.$now->month.'/'.$now->year) !!}
      </div>

      <div class="form-group">

        <button type="submit" class="btn btn-primary">Crear Factura</button>

      </div>

      {!! Form::close() !!}
    </div>
  </div>



</div>

<div class="col-md-12">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Mis Facturas</h3>  
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
