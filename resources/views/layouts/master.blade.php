<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="{{ url('/assets/jquery/jquery-ui.css') }}" >
    
    
    <script type="text/javascript" src="{{ url('/assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/assets/jquery/jquery-ui.js') }}"></script>

    
    <title>@yield('titulo')</title>
  </head>
  <body>
    @include('layouts.navbar')
    <div class="container-fluid pl-5 mt-5 pt-3">
      @yield('contenido')
    </div>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}" ></script>
    
  </body>
</html>