<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Fotográfico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> Estudio Fotográfico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/portafolio') }}">Portafolio</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('mensajes.index') }}"> Mensajes</a></li> 
</ul>

                </ul>
            </div>
        </div>
    </nav>

    <header class="header bg-dark text-white text-center py-5">
        <h1>Capturamos tus mejores momentos </h1>
        <p class="lead">Fotografía profesional para eventos, retratos y más.</p>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Estudio Fotográfico. Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
