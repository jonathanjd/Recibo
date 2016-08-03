@extends('admin.template.base')

@section('title', 'Lista de Maquinas' )

@section('content')


    <!--Buscador de Maquinas -->

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> <i class="glyphicon glyphicon-search"></i> Buscar Maquinas</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.maquina.index','method' => 'GET']) !!}

    <div class="form-group">
          {!! Form::select('tipo', array('todo' => 'Todo', 'maquina-modelo' => 'Maquina/Modelo'), 'todo',['class' => 'form-control','v-model' => 'selected']); !!}
 	  </div>
     

  <div class="form-group" v-if="mostrar(selected)">
      <div class="">
        <div class="radio">
          <label>
            <input name="optionsRadiosA" id="Reparado" value="Reparado" checked="" type="radio">
            Reparado
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="optionsRadiosA" id="NoReparado" value="NoReparado" type="radio">
            No Reparado
          </label>
        </div>
      </div>
    </div>

    <div class="form-group" v-if="mostrar(selected)">
      <div class="">
        <div class="radio">
          <label>
            <input name="optionsRadiosB" id="Entregado" value="Entregado" checked="" type="radio">
            Entregado
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="optionsRadiosB" id="NoEntregado" value="NoEntregado" type="radio">
            No Entregado
          </label>
        </div>
      </div>
    </div>


  <div class="input-group">
    {!! Form::text('buscar',null,['class' => 'form-control','placeholder'=>'Buscar Maquinas']) !!}
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Buscar Maquina"> <i class="glyphicon glyphicon-search"></i> </button>
    </span>
  </div>


{!! Form::close() !!}
  </div>
</div>


<!--Fin Buscador de Maquinas -->


<div class="row">
  <div class="col-md-9">
    <!-- Lista de Maquinas-->

<div class="panel panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title"> <i class="glyphicon glyphicon-th-list"></i> Lista de Maquinas</h3>
  </div>
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
             Maquina
          </th>
          <th>
            Modelo
          </th>
          <th>
            Estado
          </th>
          <th>
            Entregado
          </th>
          <th>
            Factura
          </th>
          <th>
            Cliente
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($details as $detail)
          <tr>
            <td>
              {{ $detail->id }}
            </td>
            <td>
              {{ $detail->maquina }}
            </td>
            <td>
              {{ $detail->modelo }}
            </td>
            <td>
              @if($detail->estado == 'No reparada')
              <span class="label label-warning">{{ $detail->estado }}</span>
              @else
              <span class="label label-success">{{ $detail->estado }}</span>
              @endif
            </td>
            <td>
              @if($detail->entregado == 'Si')
              <span class="label label-success">{{ $detail->entregado }}</span>
              @else
              <span class="label label-warning">{{ $detail->entregado }}</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.invoice.show',$detail->invoice->id) }}" class="btn btn-primary"> {{ $detail->invoice->id }}</a>
            </td>
            <td>
              <a href="{{ route('admin.cliente.show',$detail->invoice->cliente->id) }}">{{ $detail->invoice->cliente->nombre }}</a>
            </td>
            
          </tr>
        @endforeach

      </tbody>

    </table>
  </div>
</div>
  </div>

  <!--Menu Calendario-->
<div class="col-md-3">

  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title"> <i class="glyphicon glyphicon-calendar"></i> Calendario</h3>
    </div>
    <div class="panel-body">

      <div class="list-group">
        <a href="{{ route('admin.maquina.calendario.mensual') }}" class="list-group-item">Mensual</a>
        <a href="{{ route('admin.maquina.calendario.anual') }}" class="list-group-item">Anual</a>
      </div>

    </div>
  </div>

</div>
  <!--Fin Menu Calendario-->

</div>
  


<div class="panel panel-default">
  <div class="panel-body">
    {{ $details->links() }}
  </div>
</div>



@endsection


@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script src="{{ asset('js/vue-maquina.js') }}"></script>
@endsection
