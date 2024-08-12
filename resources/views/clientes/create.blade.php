@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Cliente</h2>

    <!-- Mostrar mensajes de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" class="form-control" value="{{ old('nombres') }}" required>
                @error('nombres')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ old('apellidos') }}" required>
                @error('apellidos')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}" required>
                @error('correo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Registrar Cliente</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .form-container {
            max-width: 50%; /* Limita el ancho del formulario al 50% de la pantalla */
            margin: 0 auto; /* Centra el formulario horizontalmente */
        }

        .form-group {
            margin-bottom: 1rem; /* Espacio entre los campos del formulario */
        }

        .form-control {
            width: 100%; /* Asegura que los campos ocupen todo el ancho del formulario */
        }
    </style>
@endpush

