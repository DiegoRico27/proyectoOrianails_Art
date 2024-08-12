@extends('layouts.app')

@section('titulo', 'Crear Curso')

@section('contenido')
<br>
<h3>Crear un nuevo curso</h3>
<form action='/cursos' method='post'>
    @csrf
    <div class="mb-3">
      <label for="nombrecurso" class="form-label">Nombre del Curso</label>
      <input type="texto" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="estadocurso" class="form-label">Estado del Curso</label>
        <input type="texto" class="form-control" id="estado" name="estado">
      </div>
    <div class="mb-3">
        <label for="duracioncurso" class="form-label">Duración del Curso</label>
        <input type="number" class="form-control" id="duracion" name="duracion">
      </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción del Curso</label>
        <input type="texto" class="form-control" id="descripcion" name="descripcion">
    </div>
       <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
