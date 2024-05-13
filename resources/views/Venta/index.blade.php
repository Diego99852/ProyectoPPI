@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
<div class="container mt-5">
    <h1>Listado de Ventas</h1>

    <div class="container mt-5">
        <form action="{{ url('/Venta/show') }}" method="GET" onsubmit="return validateForm()"> 
            <div class="form-group">
                <label for="id">Buscar Venta por ID:</label>
                <input class="form-control" type="text" id="id" name="id" placeholder="Escriba aquí el ID de la venta" autofocus>
                <div id="error-message" style="color: red; display: none;">Por favor, ingrese un número válido.</div>
            </div><br>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
<script>
    function validateForm() {
        var input = document.getElementById("id").value;
        if (isNaN(input) || input === "") {
            document.getElementById("error-message").style.display = "block";
            return false; 
        } else {
            document.getElementById("error-message").style.display = "none";
            return true; 
        }
    }
</script>

<div style="margin-bottom: 40px;"></div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>total</th>
                <th>fecha</th>
                <th>Panes</th>
                <th>empleado ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($venta as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->Total }}</td>
                <td>{{ $venta->Fecha }}</td>
                <td>
                @foreach($venta->Pan as $ventas)
                {{ $ventas->nombre}} <br>
                @endforeach
                </td>
                <td>{{ $venta->Id_empleados }}</td>
                
                <td>

                    <a href="{{ route('Venta.edit', $venta->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('Venta.destroy', $venta->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container mt-5 d-flex flex-column align-items-center justify-content-end">
        <a class="btn btn-success mt-3" href="/">Volver a inicio</a>
</div>
@endsection