@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
    <div class="container">
    <h1 class="mt-5">Editar Pan</h1>
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
    <form method="POST" action="{{ route('Pan.update', $Pan) }}" class="mt-4 needs-validation" novalidate>
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="Pan">Pan:</label>
            <input type="text" class="form-control" id="Pan" name="nombre" required>
            <div class="invalid-feedback">Por favor, ingresa el nombre de pan.</div>
        </div>

        <div class="form-group">
            <label for="precio">precio:</label>
            <input type="integer" class="form-control" id="precio" name="precio" required>
            <div class="invalid-feedback">Por favor, ingresa el apellido 2.</div>
        </div>
        <x-button type="submit">Guardar Pan</x-button>
        <a href="/Pan" class="btn btn-primary">Volver</a>
    </form>
</div>
@endsection