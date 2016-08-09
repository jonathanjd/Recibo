@extends('admin.template.base') 
@section('title','Editar Detalle') 
@section('content') @if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
  <ul>
    <button type="button" class="close" data-dismiss="alert">&times;</button> @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
    @endforeach
  </ul>
</div>
@endif
<p>
  <a href="{{ route('admin.invoice.show',$detail->invoice_id) }}" class="btn btn-primary">Regresar</a>
</p>

<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Editar Detalle / Factura N° {{ $detail->invoice_id }}</h3>
  </div>
  <div class="panel-body">

    {!! Form::open(['route' => ['admin.detail.update',$detail->id],'method' => 'PUT']) !!}

    <div class="form-group">
      {!! Form::label('maquina', 'Maquina') !!} 
      {!! Form::text('maquina',$detail->maquina,['class' => 'form-control','placeholder' => 'Nombre Maquina','required']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('modelo', 'Modelo') !!}
       {!! Form::text('modelo',$detail->modelo,['class' => 'form-control','placeholder' => 'Modelo Maquina','required']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('descripcion', 'Descripcion') !!}
       {!! Form::textarea('descripcion',$detail->descripcion,['class' => 'form-control','required']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('abono', 'Abono') !!}
       {!! Form::number('abono',$detail->abono,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('costo', 'Costo') !!}
       {!! Form::number('costo',$detail->costo,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('estado', 'Estado') !!}
       {!! Form::select('estado', array('No reparada' => 'No reparada', 'Reparada' => 'Reparada'), $detail->estado,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
      {!! Form::label('entregado', 'Entregado') !!}
       {!! Form::select('entregado', array('Si' => 'Si', 'No' => 'No'), $detail->entregado,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
      <div class="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
    </div>
    {!! Form::close() !!}

  </div>
</div>

<p>
  <a href="{{ route('admin.invoice.show',$detail->invoice_id) }}" class="btn btn-primary">Regresar</a>
</p>

@endsection