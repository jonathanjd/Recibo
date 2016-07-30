@extends('admin.template.base')

@section('title', 'Lista de Factura' )

@section('content')


  <p>
    <a href="{{ route('admin.invoice.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Factura"></a>
  </p>


<!--Buscador de Clientes -->

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Buscar Factura</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.invoice.index','method' => 'GET']) !!}

<div class="form-group">
  <div class="input-group">
    {!! Form::text('buscar',null,['class' => 'form-control','placeholder'=>'Buscar Factura']) !!}
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Buscar Factura"> <i class="glyphicon glyphicon-search"></i> </button>
    </span>
  </div>
</div>

{!! Form::close() !!}
  </div>
</div>


<!--Fin Buscador de Clientes -->



<div class="panel panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title">Lista de Factura</h3>
  </div>
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>
            Nº Factura:
          </th>
          <th>
            Fecha
          </th>
          <th>
            Creado Por
          </th>
          <th>
            Cliente
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoices as $invoice)
          <tr>
            <td>
              {{ $invoice->id }}
            </td>
            <td>
              {{ $invoice->created_at->format('d/m/Y') }}
            </td>
            <td>
              {{ $invoice->user->name }}
            </td>
            <td>
              {{ $invoice->cliente->nombre .' '.$invoice->cliente->apellido}}
            </td>
            <td>
              <a href="{{ route('admin.invoice.show', $invoice) }}" class="btn btn-info glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="bottom" title="Ver Cliente"></a>
            </td>
          </tr>
        @endforeach

      </tbody>

    </table>
  </div>
</div>

<p>
  <a href="{{ route('admin.invoice.create') }}" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Crear Factura"></a>
</p>

<div class="panel panel-default">
  <div class="panel-body">
    {{ $invoices->links() }}
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
