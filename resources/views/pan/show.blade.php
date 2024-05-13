@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
    <div class="container">
        <h1>Bienvenido a mi aplicación</h1>
        <!-- Contenido específico de esta vista -->
    </div>
    <div class="container mt-5">
        <h1>Listado de Pan</h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $Pan->id }}</td>
                    <td>{{ $Pan->nombre }}</td>
                    <td>{{ $Pan->precio }}</td>
                    <td>
                        <button class="btn btn-primary" onclick="window.location.href='/Pan/{{ $Pan->id }}/edit'">Editar</button>

                        <form action="{{ route('Pan.destroy', $Pan->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/Pan" class="btn btn-primary">Volver</a>
    </div>
@endsection