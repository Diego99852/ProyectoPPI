<!DOCTYPE html>
<html>
<head>
    <title>Listado de Empleados</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        <h1>Listado de Empleados</h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Nombre</th>
                    <th>Sueldo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->apellido1 }}</td>
                    <td>{{ $empleado->apellido2 }}</td>
                    <td>{{ $empleado->nombrepila }}</td>
                    <td>{{ $empleado->sueldo }}</td>
                    <td>
                        <button class="btn btn-primary" onclick="window.location.href='/empleados/edit/{{ $empleado->id }}'">Editar</button>

                        <form action="{{ route('empleados.delete', $empleado->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer class="footer fixed-bottom bg-dark text-light text-center py-4">
        <div class="container">
            <span class="text-muted">© 2024 panaderia el bueno</span>
            <span class="text-muted">Tel: 555-5555-5555</span>
        </div>
    </footer>
    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
