<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.index') }}">Panel de Control</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      @if(Auth::guest())

      @else
      <ul class="nav navbar-nav">
        
        

        <!-- Cliente -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.cliente.index') }}">Lista</a></li>
            <li><a href="{{ route('admin.cliente.create') }}">Crear</a></li>
          </ul>
        </li>
        <!-- Fin Cliente -->

        <!-- Recibo -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Factura <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.invoice.index') }}">Lista</a></li>
            <li><a href="{{ route('admin.invoice.create') }}">Crear</a></li>
          </ul>
        </li>
        <!-- Fin Recibo -->

        <!-- Maquina -->
        <li><a href="{{ route('admin.maquina.index') }}">Maquina</a></li>
        <!-- Fin Maquina -->

        <!-- Usuario -->
        <li><a href="{{ route('admin.user.index') }}">Usuario</a></li>
        <!-- Usuario -->

        <!-- Web -->
        <li><a href="{{ route('web.index') }}">Mi Sitio Web</a></li>
        <!-- Web -->

      
      </ul>
      
      @endif

      
      
     <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="active"><a href="{{ url('/login') }}">Iniciar Sesion<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


