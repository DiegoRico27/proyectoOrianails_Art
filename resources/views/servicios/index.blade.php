@extends('layouts.app')

@section('content')
<div class="services-container">
    <h3>CONOCE NUESTROS SERVICIOS</h3>
    <p class="after">LA VIDA NO ES PERFECTA PERO TUS UÑAS SÍ PUEDEN SERLO</p>

    <!-- Mostrar mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="services-grid">
        @foreach($servicios as $servicio)
        <div class="service-card">
            <img src="{{ asset('storage/' . $servicio->image) }}" alt="{{ $servicio->nombre }}" class="service-image" />
            <h4>{{ $servicio->nombre }}</h4>
            <p>{{ $servicio->descripcion }}. Precio: ${{ $servicio->precio }}</p>
            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">Eliminar</button>
            </form>
        </div>
        @endforeach
    </div>
    <a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar Servicio</a>
</div>
@endsection
