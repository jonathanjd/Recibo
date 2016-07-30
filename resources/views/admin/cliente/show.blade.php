@extends('admin.template.base')
@section('title', 'Mostrar Cliente')
@section('content')

  <p>
    <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
  </p>


<div class="panel panel-default">
  <div class="panel-heading">Mostrar Cliente</div>
  <div class="panel-body">
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Cliente</h3>
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
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Mis Facturas</h3>
        </div>
        <div class="panel-body">

            @if (count($cliente->invoices))
              {{-- expr --}}
            @foreach($cliente->invoices as $invoice)

            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="{{ route('admin.invoice.show' , $invoice->id) }}">Factura Nº {{ $invoice->id }}</a></h3>
              </div>
              <div class="panel-body">
                <p>
                  <strong>Fecha:</strong>{{ $invoice->created_at->format('d/m/Y') }}
                </p>
                <p>
                  <strong>Creado Por:</strong>{{ $invoice->user->name }}
                </p>
              </div>
            </div>
            
            @endforeach

            @else

            <p>No tiene Factura</p>

            @endif
         
            
          
        </div>
      </div>
    </div>
  </div>
</div>


  <p>
    <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary">Regresar</a>
  </p>


@endsection
@section('js')
<script type="text/javascript">
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection
