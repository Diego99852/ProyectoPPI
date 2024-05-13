@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
<div class="container mt-5">
      <h1>Registrar Pan</h1>
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
        <form method="POST" action="{{ route('Pan.store') }}" class="bg-transparent shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="form-group">
                <label for="Pan">Pan:</label>
                <input type="text" id="Pan" name="nombre" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="Precio">Precio:</label>
                <input type="integer" id="Precio" name="precio" class="form-control" required>
            </div>

            <x-button type="submit">Guardar Pan</x-button>
            <a href="/Pan" class="btn btn-primary">Volver</a>
        </form>
    </div>
@endsection