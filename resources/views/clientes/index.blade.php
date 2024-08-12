@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Clientes</h2>

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
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->correo }}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


