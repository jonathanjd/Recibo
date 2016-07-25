<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') | Panel de Control</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <header>
      @include('admin.template.partials.navbar')
    </header>

    <main>
      <section class="container">
        <div class="row">
          <div class="col-md-12">
            @include('flash::message')
            @yield('content')
          </div>
        </div>


      </section>
    </main>

   <footer>
   </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   @yield('js')

  </body>
</html>
