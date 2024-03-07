<!DOCTYPE html>
<html>
<head>
    <title>Listado de Empleados</title>
</head>
<body>
    <h1>Listado de Empleados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>apellido1</th>
                <th>apellido2</th>
                <th>nombrepila</th>
                <th>Sueldo</th>
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
                    <button onclick="window.location.href='/empleados/edit/{{ $empleado->id }}'">Editar</button>

                    <form action="{{ route('empleados.delete', $empleado->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
