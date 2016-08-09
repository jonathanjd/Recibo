@extends('admin.template.base')

@section('title', 'Lista de Clientes' )

@section('content')



<div class="panel panel-default">
  <div class="panel-heading">Bienvenido al Sistema</div>
  <div class="panel-body">
    
<div class="row">

  <div class="col-md-6">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Clientes</h3>
    </div>
    <div class="panel-body">
      
      @if(count($clientes))

      <div class="list-group">
          
        @foreach($clientes as $cliente)

        <a href="{{ route('admin.cliente.show',$cliente->id) }}" class="list-group-item">
        {{ $cliente->nombre .' '. $cliente->apellido }} |
        <strong>TeleFono:</strong>{{ $cliente->telefono_uno }}
        </a>

      @endforeach

      </div>
  
      @else

      @endif

    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Facturas</h3>
    </div>
    <div class="panel-body">
      
      
      @if(count($invoices))
      <div class="list-group">
      @foreach($invoices as $invoice)

      <a href="{{ route('admin.invoice.show',$invoice->id) }}" class="list-group-item">
        
        <strong>Factura N° </strong>{{ $invoice->id }}
        <strong>Cliente: </strong>{{ $invoice->cliente->nombre }} 
        <strong>Fecha: </strong>{{ $invoice->created_at->diffForHumans() }}
        

      </a>

      @endforeach
      </div>
      @else

      @endif


    </div>
  </div>
</div>
  
</div>


<div class="row">
  <div class="col-md-6">

<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">No Reparada</h3>
  </div>
  <div class="panel-body">
    
    <div class="list-group">
      @foreach($noReparadas as $noReparada)
      <a href="{{ route('admin.invoice.show',$noReparada->invoice->id) }}" class="list-group-item">
      {{ $noReparada->maquina }} - 
      {{ $noReparada->modelo }} | 
      <strong>{{ $noReparada->invoice->cliente->nombre.' '.$noReparada->invoice->cliente->apellido }}</strong> |
      <strong>{{ $noReparada->invoice->updated_at->diffForHumans() }}</strong>
      @if($noReparada->entregado == 'Si')
      | <i class="glyphicon glyphicon-plane"></i>
      </a>
      <a href="#" class="btn btn-default disabled"><i class="glyphicon glyphicon-share-alt"></i> Reparada</a>
      @else
      </a>
      <a href="{{ route('admin.detail.estado',$noReparada->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-share-alt"></i> Reparada</a>
      @endif

      @endforeach
    </div>


  </div>
</div>
  
</div>

<div class="col-md-6">

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Reparada</h3>
  </div>
  <div class="panel-body">
    <div class="list-group">
      @foreach($reparadas as $reparada)
      <a href="{{ route('admin.invoice.show',$reparada->invoice->id) }}" class="list-group-item">
      {{ $reparada->maquina }} - 
      {{ $reparada->modelo }} | 
      <strong>{{ $reparada->invoice->cliente->nombre.' '.$reparada->invoice->cliente->apellido }}</strong> |
      <strong> {{ $reparada->invoice->cliente->telefono_uno }} </strong> |
      <strong>{{ $reparada->invoice->updated_at->diffForHumans() }}</strong>
      </a>
      @endforeach
    </div>
  </div>
</div>
  
</div>
</div>

<div class="row">
  <div class="col-md-6">
  <div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">No Entregado</h3>
  </div>
  <div class="panel-body">
    
    <div class="list-group">
      @foreach($noEntregados as $noEntregado)
      <a href="{{ route('admin.invoice.show',$noEntregado->invoice->id) }}" class="list-group-item">
      {{ $noEntregado->maquina }} -
      {{ $noEntregado->modelo }} |
      <strong>{{ $noEntregado->invoice->cliente->nombre.' '.$noEntregado->invoice->cliente->apellido }}</strong> |
      <strong> {{ $noEntregado->invoice->cliente->telefono_uno }} </strong> |
      <strong>{{ $noEntregado->invoice->updated_at->diffForHumans() }}</strong>
      </a>
      <a href="{{ route('admin.detail.entregado',$noEntregado->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-share-alt"></i> Entregado</a>
      @endforeach
    </div>

  </div>
</div>
</div>


<div class="col-md-6">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Entregado</h3>
  </div>
  <div class="panel-body">
    <div class="list-group">
      @foreach($entregados as $entregado)
      <a href="{{ route('admin.invoice.show',$entregado->invoice->id) }}" class="list-group-item">
      {{ $entregado->maquina }} -
      {{ $entregado->modelo }} |
      <strong>{{ $entregado->invoice->cliente->nombre.' '.$entregado->invoice->cliente->apellido }}</strong> |
      <strong> {{ $entregado->invoice->cliente->telefono_uno }} </strong> |
      <strong>{{ $entregado->invoice->updated_at->diffForHumans() }}</strong>
      </a>
      @endforeach
    </div>
  </div>
</div>
  
</div>
</div>


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
