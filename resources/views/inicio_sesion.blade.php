<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css">
</head>
<body id="">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
            </ul>
        </div>
        @if (Auth::user())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
        @endif
    </nav>
    <!-- Contenido principal -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Bienvenido</h4>
                <h1 class="display-4">¿Qué desea realizar?</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agregar Nuevo Empleado</h5>
                            <p class="card-text"></p>
                            <a href="/empleados/crear" class="btn btn-secondary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="card">
                        <img src="http://localhost:8000/images/pan.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ver Lista de Empleados</h5>
                            <a href="/empleados/index" class="btn btn-primary mb-3">Ir</a>
                            <h5 class="card-title">Buscar por ID</h5>
                            <a href="/empleados" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pie de página -->
    <footer class="footer fixed-bottom bg-dark text-light text-center py-4">
        <div class="container">
            <span class="text-muted">© 2024 panaderia el bueno</span>
            <span class="text-muted">Tel: 555-5555-5555</span>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
