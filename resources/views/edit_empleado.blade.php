<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>

<h1>Editar Empleado</h1>

<form method ="POST" action="{{ route('empleados.update', $empleado) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    @csrf 
    <label for="apellido1">apellido1:</label>
    <input type="text" id="apellido1" name="apellido1" required><br><br>

    <label for="apellido2">apellido2:</label>
    <input type="text" id="apellido2" name="apellido2" required><br><br>

    <label for="nombrepila">nombrepila:</label>
    <input type="text" id="nombrepila" name="nombrepila" required><br><br>

    <label for="sueldo">sueldo:</label>
    <input type="number" id="sueldo" name="sueldo" required><br><br>

    <button type="submit">Guardar Empleado</button>
</form>

</body>
</html>