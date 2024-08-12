@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="form-container col-md-6"> <!-- Ajusta el tamaño del formulario al 50% -->
        <h3>Reservar Cita</h3>

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

        <!-- Mostrar mensaje de éxito -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}" required>
                @error('apellido')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}" required>
                @error('telefono')
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
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
                @error('fecha')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" value="{{ old('hora') }}" required>
                @error('hora')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Reservar</button>
        </form>
    </div>
</div>
@endsection

