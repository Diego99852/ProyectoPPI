@extends('layouts.base')

@section('title', 'Página de inicio')

@section('content')
<div class="container mt-5">
      <h1>Registrar Venta</h1>
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
        <form method="POST" action="{{ route('Venta.store') }}" class="bg-transparent shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="form-group">
                <label for="Venta">Venta:</label>
                <input type="integer" id="Venta" name="Total" class="form-control" required>
            </div>
            
            <style>
                .btn-group-toggle .btn {
                    margin-bottom: 5px; /* Puedes ajustar este valor según la separación que desees */
                }
            </style>

            <div class="btn-group-toggle" data-toggle="buttons">
                @foreach($Pan as $pan)
                    <label class="btn btn-primary">
                        <input type="checkbox" name="Pan[]" value="{{ $pan->id }}">{{ $pan->nombre }}
                    </label>
                @endforeach
            </div>

            <div class="form-group">
                <label for="Fecha">Fecha:</label>
                <input type="date" id="Fecha" name="Fecha" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="empleado id">empleado id:</label>
                <input type="id" id="id" name="Id_empleados" class="form-control" required>
            </div>
            <x-button type="submit">finalizar venta</x-button>
            <a href="/" class="btn btn-primary">Volver</a>
        </form>
    </div>
@endsection