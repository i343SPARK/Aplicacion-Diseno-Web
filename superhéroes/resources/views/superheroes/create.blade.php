{{-- resources/views/superheroes/create.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>Crear Superhéroe</h1>
<form action="{{ route('superheroes.store') }}" method="POST">
  @csrf
  <label for="verdadero_nombre">Nombre Real:</label>
  <input type="text" name="verdadero_nombre" id="verdadero_nombre" required>
  
  <label for="nombre_conocido">Nombre de Superhéroe:</label>
  <input type="text" name="nombre_conocido" id="nombre_conocido" required>

  <label for="url_foto">URL de la Foto:</label>
  <input type="text" name="url_foto" id="url_foto">

  <label for="informacion_adicional">Información Adicional:</label>
  <textarea name="informacion_adicional" id="informacion_adicional"></textarea>

  <button type="submit">Crear Superhéroe</button>
</form>
@endsection
