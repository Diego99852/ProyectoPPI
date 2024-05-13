@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
    <div class="container">
    </div>
    <div class="container mt-5">
        <h1>Listado de Ventas
        </h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Panes</th>
                    <th>empleado ID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{ $Venta->id }}</td>
                <td>{{ $Venta->Total }}</td>
                <td>{{ $Venta->Fecha }}</td>
                <td>
                @foreach($Venta->Pan as $Ventas)
                {{ $Ventas->nombre}} <br>
                @endforeach
                </td>
                <td>{{ $Venta->Id_empleados }}</td>
                    <td>
                        <button class="btn btn-primary" onclick="window.location.href='/Venta/{{ $Venta->id }}/edit'">Editar</button>

                        <form action="{{ route('Venta.destroy', $Venta->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/Venta" class="btn btn-primary">Volver</a>
    </div>
@endsection