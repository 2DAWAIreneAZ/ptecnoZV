<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TecnoZV</title>

  <!-- Bootstrap & Theme -->
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>
<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container px-5">
    <a class="navbar-brand" href="{{ url('/') }}">TecnoZV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/atencioncliente') }}">Atención</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content-->
<div class="container px-5 my-5">
  @yield('content')
</div>

<!-- Footer-->
<footer class="py-4 bg-dark">
  <div class="container px-5"><p class="m-0 text-center text-white">© 2025 TecnoZV</p></div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
