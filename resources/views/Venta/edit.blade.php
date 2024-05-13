@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')


    <div class="container">
    <h1 class="mt-5">Editar Venta</h1>
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
    <form method="POST" action="{{ route('Venta.update', $Venta->id) }}" class="mt-4 needs-validation" novalidate>
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="Total">Venta:</label>
            <input type="text" class="form-control" id="Total" name="Total" required>
            <div class="invalid-feedback">Por favor, ingresa el nombre de pan.</div>
        </div>

        <label for="Pan">Seleccione el Pan:</label>
            <select name="Pan[]" id="Pan" multiple class="form-control">
                @foreach($Pan as $pan)
                    <option value="{{ $pan->id }}">{{ $pan->nombre }}</option>
                @endforeach
            </select>

        <div class="form-group">
            <label for="Fecha">Fecha:</label>
            <input type="date" class="form-control" id="Fecha" name="Fecha" required>
            <div class="invalid-feedback">Por favor, ingresa el apellido 2.</div>
        </div>
        <div class="form-group">
            <label for="id">empleados id:</label>
            <input type="id" class="form-control" id="id" name="Id_empleados" required>
            <div class="invalid-feedback">Por favor, ingresa id del empleado.</div>
        </div>
        <x-button type="submit">Guardar Cambios</x-button>
        <a href="/Venta" class="btn btn-primary">Volver</a>
    </form>
</div>
@endsection