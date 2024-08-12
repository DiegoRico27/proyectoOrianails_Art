@extends('layouts.app')

@section('titulo', 'Listado de Cursos')

@section('contenido')

<br>
<h3 class="text-center">Cursos Disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$cursito->nombre}}</h4>
                  <p class="card-text">Estado <b>{{$cursito->estado}}</b></p>
                  <p class="card-text">{{$cursito->descripcion}}</p>
                  <p class="card-text">{{$cursito->duracion}}</p>
                  <a href="#" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
