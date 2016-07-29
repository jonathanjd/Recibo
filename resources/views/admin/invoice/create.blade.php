@extends('admin.template.base')

@section('title', 'Crear Factura')

@section('content')

@if(count($errors) > 0)
  <div class="alert alert-dismissible alert-danger">
    <ul>
      <button type="button" class="close" data-dismiss="alert">&times;</button>

  @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
  @endforeach
    </ul>
  </div>
@endif
<p>
  <a href="{{ route('admin.invoice.index') }}" class="btn btn-primary">Regresar</a>
</p>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Crear Factura</h3>
  </div>
  <div class="panel-body">

    <!-- ************************************** -->
    <!--  Panel Cliente  -->
    <!-- ************************************** -->
    <div class="col-md-6">
        
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Cliente</h3>
          </div>
          <div class="panel-body">

            <!--*********************-->
            <!--Buscador de Clientes -->
            <!--*********************-->
            {!! Form::open(['route' => 'admin.invoice.create','method' => 'GET']) !!}

            <div class="form-group">
              <div class="input-group">
                {!! Form::text('buscar',null,['class' => 'form-control','placeholder'=>'Buscar Clientes']) !!}
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Buscar Cliente"> <i class="glyphicon glyphicon-search"></i> </button>
                </span>
              </div>
            </div>


            {!! Form::close() !!}
            <!--*************************-->
            <!--Fin Buscador de Clientes -->
            <!--*************************-->
            {!! Form::open(['route' => 'admin.invoice.store','method' => 'POST']) !!}
            <div id="lista-cliente" class="form-group">
              <label for="select" class="control-label">Mis Clientes</label>
                <select name='cliente' class="form-control" id="select" required>
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nombre ." ".$cliente->apellido }}</option>
                        @endforeach
                </select>

            </div>

            <p>
              <button type="button" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" data-placement="bottom">
              </button>
            </p>

          </div>
        </div>

      </div>
    <!-- ************************************** -->
    <!--  Fin Panel Cliente  -->
    <!-- ************************************** -->


<div class="col-md-6">

  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Factura</h3>
    </div>
    <div class="panel-body">
      
      <div class="form-group">
        @if (!$lastInvoice == null)
         {!! Form::label('nombre', 'Numero Factura: '. 1) !!} 
        @else 
         {!! Form::label('nombre', 'Numero Factura: '. $lastInvoice) !!} 
        @endif
      </div>

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


  </div>
</div>
<p>
  <a href="{{ route('admin.invoice.index') }}" class="btn btn-primary">Regresar</a>
</p>


<!--*******-->
            <!-- Modal -->
            <!--*******-->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Cliente</h4>
                  </div>
                  <div class="modal-body">
                    
                      <!-- ************************ -->
                      <!-- Formulario Crear Cliente -->
                      <!-- ************************ -->
                      {!! Form::open(['route' => 'admin.cliente.store','method' => 'POST']) !!}
                      {!! Form::hidden('modal', 'modal-cliente') !!}
                      <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Nombre Cliente','required']); !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('apellido', 'Apellido') !!}
                        {!! Form::text('apellido',null,['class' => 'form-control','placeholder' => 'Apellido Cliente','required']); !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('cedula', 'Cedula') !!}
                        {!! Form::number('cedula',null,['class' => 'form-control','placeholder' => 'Cedula Cliente','required']); !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('telefono_uno', 'Telefono N°1') !!}
                        {!! Form::text('telefono_uno',null,['class' => 'form-control','placeholder' => 'Telefono Cliente','required']); !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('telefono_dos', 'Telefono N°2') !!}
                        {!! Form::text('telefono_dos',null,['class' => 'form-control','placeholder' => 'Telefono Cliente','required']); !!}
                      </div>
                       <!-- **************************** -->
                      <!-- Fin Formulario Crear Cliente -->
                      <!-- **************************** -->

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
            <!--***********-->
            <!-- Fin Modal -->
            <!--***********-->


@endsection

@section('js')
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection