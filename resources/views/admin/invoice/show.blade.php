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
            <strong>Nº Factura: </strong><span class="label label-primary">{{ $invoice->id }}</span>
          </p>
          <p>
            <strong>Fecha: </strong>{{ $invoice->created_at->format('d/m/Y') }}
          </p>
          <p>
            <strong>Creado por: </strong>{{ $invoice->user->name }}
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
            <strong>Nombre: </strong>{{ $invoice->cliente->nombre }}
          </p>
          <p>
            <strong>Apellido: </strong>{{ $invoice->cliente->apellido }}
          </p>
          <p>
            <strong>Cedula: </strong>{{ $invoice->cliente->cedula }}
          </p>
          <p>
            <strong>Telefono Nº1: </strong>{{ $invoice->cliente->telefono_uno }}
          </p>
          <p>
            <strong>Telefono Nº2: </strong>{{ $invoice->cliente->telefono_dos }}
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
              <button type="button" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" data-placement="bottom">
              </button>
            </p>



          @if(count($invoice->details))
            @foreach ($invoice->details as $detail)
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><span class="label label-primary">{{ $detail->maquina }} </span> <span class="label label-default">{{ $detail->modelo }}</span></h3>
                </div>
                <div class="panel-body">
                  <p><strong>Descripcion:</strong>{{ $detail->descripcion }}</p>
                  <p><strong>Abono:</strong>{{ $detail->abono }}</p>
                  <p><strong>Costo:</strong>{{ $detail->costo }}</p>

                  @if ($detail->estado == 'No reparada')
                  <p><strong>Estado:</strong><span class="label label-warning">{{ $detail->estado }}</span></p>
                  @else
                  <p><strong>Estado:</strong><span class="label label-success">{{ $detail->estado }}</span></p>
                  @endif

                  @if ($detail->entregado == 'No')
                  <p><strong>Entregado:</strong><span class="label label-warning">{{ $detail->entregado }}</span></p>
                  @else
                  <p><strong>Entregado:</strong><span class="label label-success">{{ $detail->entregado }}</span></p>
                  @endif
                  

                  <a href="{{ route('admin.detail.delete', $detail) }}" class="btn btn-danger pull-right glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Cliente"></a>

                  <a href="{{ route('admin.detail.edit', $detail) }}" class="btn btn-warning glyphicon glyphicon-pencil pull-right" data-toggle="tooltip" data-placement="bottom" title="Eliminar Cliente"></a>
                  

                </div>
              </div>

            @endforeach
          @else
            
          @endif

        </div>
      </div>
    </div>
  </div>
</div>

<!--**********************-->
<!-- Modal Crear Detalle -->
<!--**********************-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Detalle</h4>
      </div>
      <div class="modal-body">
        
        <!-- ************************ -->
        <!-- Formulario Crear Detalle -->
        <!-- ************************ -->
        {!! Form::open(['route' => 'admin.detail.store','method' => 'POST']) !!}
        {!! Form::hidden('invoice_id', $invoice->id) !!}
        <div class="form-group">
          {!! Form::label('maquina', 'Maquina') !!}
          {!! Form::text('maquina',null,['class' => 'form-control','placeholder' => 'Nombre Maquina','required']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('modelo', 'Modelo') !!}
          {!! Form::text('modelo',null,['class' => 'form-control','placeholder' => 'Modelo Maquina','required']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('descripcion', 'Descripcion') !!}
          {!! Form::textarea('descripcion',null,['class' => 'form-control','required']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('abono', 'Abono') !!}
          {!! Form::number('abono',0,['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('costo', 'Costo') !!}
          {!! Form::number('costo',0,['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('estado', 'Estado') !!}
          {!! Form::select('estado', array('No reparada' => 'No reparada', 'Reparada' => 'Reparada'), 'No reparada',['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          {!! Form::label('entregado', 'Entregado') !!}
          {!! Form::select('entregado', array('Si' => 'Si', 'No' => 'No'), 'No',['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <div class="">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!--**********************-->
<!-- Fin Modal Crear Detalle -->
<!--**********************-->







  



<p>
  <a href="{{ route('admin.invoice.index') }}" class="btn btn-primary">Regresar</a>
</p>
@endsection

@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection
