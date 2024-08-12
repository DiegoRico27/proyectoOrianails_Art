@extends('layouts.app')

@section('titulo', 'Crear docente')

@section('contenido')
<br>
<h3>Crear un Docente en la App</h3>
<form action='/docentes' method='post'>
    @csrf
    <div class="mb-3">
      <label for="nombredocente" class="form-label">Nombre</label>
      <input type="texto" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="direcciondocente" class="form-label">Dirección del Instructor</label>
        <input type="texto" class="form-control" id="direccion" name="direccion">
      </div>
    <div class="mb-3">
        <label for="telefonodocente" class="form-label">Telefono del Instructor</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
      </div>
    <div class="mb-3">
        <label for="formacion" class="form-label">Formación Asociada al Instructor</label>
        <input type="texto" class="form-control" id="formacion" name="formacion">
    </div>
       <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
