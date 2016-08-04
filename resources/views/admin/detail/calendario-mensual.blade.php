@extends('admin.template.base')

@section('title', 'Calendario Mensual')

@section('content')

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Mes: {{ $dt->format('F') }}</h3>
  </div>
  <div class="panel-body">
   

@for($i=1;$i <= $dt->daysInMonth;$i++)

<div class="col-md-2">
    <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"><strong>{{ $i }}</strong></h3>
    </div>
    <div class="panel-body">
      
    </div>
  </div>
 </div>

@endfor

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