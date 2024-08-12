@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <h2>Editar Reserva</h2>

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

        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $reserva->nombre) }}" required>
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido', $reserva->apellido) }}" required>
                @error('apellido')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono', $reserva->telefono) }}" required>
                @error('telefono')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo', $reserva->correo) }}" required>
                @error('correo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" value="{{ old('fecha', $reserva->fecha) }}" required>
                @error('fecha')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" value="{{ old('hora', $reserva->hora) }}" required>
                @error('hora')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Actualizar Reserva</button>
        </form>
    </div>
</div>
@endsection
