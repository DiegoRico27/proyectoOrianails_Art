@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6"> <!-- 50% del ancho de la pantalla -->
        <h2 class="text-center">Iniciar Sesión</h2>

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

        <form action="{{ route('login') }}" method="POST">
            @csrf

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

            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </form>
    </div>
</div>
@endsection

