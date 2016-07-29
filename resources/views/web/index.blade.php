@extends('admin.template.base')

@section('title', 'Ejercicios Vue')

@section('content')

<h1>Vue Ejercicios</h1>

<h3>Ajax</h3>
<div id="ajax">

    <ul v-for="cliente in clientes">
        <li>@{{ cliente.nombre + " " + cliente.apellido }}</li>
    </ul>

    <pre>
        @{{ $data | json }}
    </pre>
    
</div>


<h3>Computed Properties</h3>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Formulario</h3>
    </div>
    <div id="main" class="panel-body">

        <div class="form-group">

            <input type="text" v-model="nombre_frm" class="form-control" placeholder="Nombre">

        </div>

        <div class="form-group">

            <input type="text" v-model="apellido_frm" class="form-control" placeholder="Apellido">

        </div>

        <div class="form-group">

            <input v-if="todaInformacion" type="submit" class="btn btn-primary" value="Enviar">

        </div>
        <pre>
            @{{ $data | json }}
        </pre>
    </div>



</div>


<div id="intro">
<h3>@{{ nombre }}</h3>

<input type="text" v-model="nuevaTarea" placeholder="Agregar Tarea">

<input type="submit" value="Agregar tarea" @click="guardarTarea(nuevaTarea)">

<h3>Tareas</h3>

<ul v-for="tarea in tareas">
    <li> <a href="#" @click="eliminarTarea(tarea)">X</a>
     @{{ tarea.nombre }}
     </li>
</ul>

<p>
<pre>
@{{ $data | json }}
</pre>
</p>
</div>




@endsection

@section('js')
 <script src="{{ asset('js/vue.js') }}"></script>
 <script src="{{ asset('js/computed.js') }}"></script>
 <script src="{{ asset('js/ajax.js') }}"></script>
@endsection