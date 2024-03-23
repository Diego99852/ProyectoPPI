<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css"></link>
</head>
<body id="body">
        <!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" ">
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
        <button type="submit">Cerrar sesión</button>
    </form>
    @endif
</nav>
<!---fin barra de navegacion-->
    <div class="container mt-5">
        <form action="{{ url('/empleados/show') }}" method="GET"> 
            <div class="form-group">
                <label for="id">Buscar empleado por ID:</label>
                <input class="form-control" type="id" id="id" name="id" placeholder="Escriba aquí el ID del empleado" autofocus>
            </div><br>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

    <footer class="footer fixed-bottom bg-dark text-light text-center py-4">
    <div class="container">
        <span class="text-muted">© 2024 panaderia el bueno</span>
        <span class="text-muted">Tel: 555-5555-5555</span>
    </div>
</footer>
</body>
</html>