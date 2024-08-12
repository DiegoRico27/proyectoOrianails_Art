@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="form-container col-md-6"> <!-- Ajusta el tamaño del formulario al 50% -->
        <h3>Editar Servicio</h3>

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

        <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Para indicar que se trata de una actualización -->

            <div class="form-group">
                <label for="nombre">Nombre del Servicio:</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $servicio->nombre) }}" required>
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" required>{{ old('descripcion', $servicio->descripcion) }}</textarea>
                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" class="form-control" value="{{ old('precio', $servicio->precio) }}" required>
                @error('precio')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Imagen del Servicio (opcional):</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</div>
@endsection
