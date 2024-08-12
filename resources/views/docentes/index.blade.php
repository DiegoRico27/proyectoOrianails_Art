@extends('layouts.app')

@section('titulo', 'Docentes Creados')

@section('contenido')

<br>
<h3 class="text-center">Listado de Docentes</h3>
<br>
<div class="row">
    @foreach ($teacher as $docentico)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$teacher->nombre}}</h4>
                  <p class="card-text">Dir: <b>{{$teacher->direccion}}</b></p>
                  <p class="card-text">Tel:{{$teacher->telefono}}</p>
                  <p class="card-text">{{$teacher->formacion}}</p>
                  <a href="#" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
