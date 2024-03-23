<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Editar Empleado</h1>

    <form method="POST" action="{{ route('empleados.update', $empleado) }}" class="mt-4 needs-validation" novalidate>

        @csrf 

        <div class="form-group">
            <label for="apellido1">Apellido 1:</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" required>
            <div class="invalid-feedback">Por favor, ingresa el apellido 1.</div>
        </div>

        <div class="form-group">
            <label for="apellido2">Apellido 2:</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" required>
            <div class="invalid-feedback">Por favor, ingresa el apellido 2.</div>
        </div>

        <div class="form-group">
            <label for="nombrepila">Nombre:</label>
            <input type="text" class="form-control" id="nombrepila" name="nombrepila" required>
            <div class="invalid-feedback">Por favor, ingresa el nombre.</div>
        </div>

        <div class="form-group">
            <label for="sueldo">Sueldo:</label>
            <input type="number" class="form-control" id="sueldo" name="sueldo" required>
            <div class="invalid-feedback">Por favor, ingresa el sueldo.</div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Empleado</button>
        <a href="/empleados/index" class="btn btn-primary">Volver</a>
    </form>
        
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
