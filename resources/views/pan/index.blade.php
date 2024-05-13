@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
<div class="container mt-5">
    <h1>Listado de Pan</h1>
    
    <div class="container mt-5">
        <form action="{{ url('/Pan/show') }}" method="GET" onsubmit="return validateForm()"> 
            <div class="form-group">
                <label for="id">Buscar Pan por ID:</label>
                <input class="form-control" type="text" id="id" name="id" placeholder="Escriba aquí el ID del Pan" autofocus>
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

    <div class="container mt-5">
            <h5 class="card-title">Agregar Nuevo pan</h5>
            <p class="card-text"></p>
            <a href="/Pan/create" class="btn btn-secondary">agregar Pan</a>
    </div>
    <div style="margin-bottom: 40px;"></div>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pan as $pan)
            <tr>
                <td>{{ $pan->id }}</td>
                <td>{{ $pan->nombre }}</td>
                <td>{{ $pan->precio }}</td>
                <td>
                    <a href="/Pan/{{ $pan->id }}/edit" class="btn btn-primary">Editar</a>
                    <form action="{{ route('Pan.destroy', $pan->id) }}" method="POST" style="display: inline;">
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