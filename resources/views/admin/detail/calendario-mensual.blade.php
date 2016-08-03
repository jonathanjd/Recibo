@extends('admin.template.base')

@section('title', 'Calendario Mensual')

@section('content')

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Mes: {{ $dt->format('F') }}</h3>
  </div>
  <div class="panel-body">
   

@foreach($maquinas as $maquina)

<div class="col-md-2">
    <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Dia: {{ $maquina->updated_at->format('d/m/Y') }}</h3>
    </div>
    <div class="panel-body">
      
    </div>
  </div>
 </div>

@endforeach

 
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