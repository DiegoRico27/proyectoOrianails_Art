@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Reservas</h2>

    <!-- Mostrar mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-custom">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->nombre }}</td>
                    <td>{{ $reserva->apellido }}</td>
                    <td>{{ $reserva->telefono }}</td>
                    <td>{{ $reserva->correo }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->hora }}</td>
                    <td>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

