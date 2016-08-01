@extends('admin.template.base')

@section('title', 'Eliminar Detalle')

@section('content')

  <p>
    <a href="{{ route('admin.invoice.show',$detail->invoice_id) }}" class="btn btn-primary">Regresar</a>
  </p>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Eliminar Detalle / Factura N° {{ $detail->invoice_id }}</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.detail.destroy',$detail->id],'method' => 'DELETE']) !!}
      <p>
        Deseas <strong>Eliminar</strong> el <strong>Detalle: </strong> 
      </p>
      <p>
        <strong>Maquina: </strong>{{ $detail->maquina.' '.$detail->modelo}} 
      </p>
      <p>
        <strong>{{  $detail->descripcion }} </strong>
      </p>
      <div class="form-group">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>

    {!! Form::close() !!}
  </div>
</div>
<p>
  <a href="{{ route('admin.invoice.show',$detail->invoice_id) }}" class="btn btn-primary">Regresar</a>
</p>

@endsection