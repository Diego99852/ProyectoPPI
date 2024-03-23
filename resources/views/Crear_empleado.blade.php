<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                </ul>
            </div>
            @if (Auth::user())
            <form class="form-inline ml-2" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Cerrar sesión</button>
            </form>
            @endif
        </div>
    </nav>
    <!-- Final barra de navegación -->

    <div class="container mt-5">
      <h1>Crear Empleado</h1>
        @if ($errors->any())
        <div class="container mt-4">
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>   
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <form method="POST" action="{{ route('empleados.store') }}" class="bg-transparent shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="form-group">
                <label for="apellido1">Apellido 1:</label>
                <input type="text" id="apellido1" name="apellido1" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="apellido2">Apellido 2:</label>
                <input type="text" id="apellido2" name="apellido2" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nombrepila">Nombre:</label>
                <input type="text" id="nombrepila" name="nombrepila" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sueldo">Sueldo:</label>
                <input type="number" id="sueldo" name="sueldo" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Empleado</button>
        </form>
    </div>

    <!-- Pie de página -->
    <footer class="footer fixed-bottom bg-dark text-light text-center py-4">
        <div class="container">
            <span class="text-muted">© 2024 Panadería El Bueno</span>
            <span class="text-muted">Tel: 555-5555-5555</span>
        </div>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
