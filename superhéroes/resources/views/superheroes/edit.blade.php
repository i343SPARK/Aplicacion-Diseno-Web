{{-- resources/views/superheroes/edit.blade.php --}}

<!-- @dd($superheroe) -->
<!-- {{ 'Hello World' }} -->
<!-- @dd('The edit view is loading correctly') -->

@extends('layouts.app')

@section('content')

<h1>Editar Superhéroe</h1>

<form action="{{ route('superheroes.update', $superheroe->id) }}" method="POST">
    @csrf
    @method('PATCH')
    
    <label for="verdadero_nombre">Nombre Real:</label>
    <input type="text" name="verdadero_nombre" id="verdadero_nombre" value="{{ $superheroe->verdadero_nombre }}" required>
    
    <label for="nombre_conocido">Nombre de Superhéroe:</label>
    <input type="text" name="nombre_conocido" id="nombre_conocido" value="{{ $superheroe->nombre_conocido }}" required>
    
    <label for="url_foto">URL de la Foto:</label>
    <input type="text" name="url_foto" id="url_foto" value="{{ $superheroe->url_foto }}">
    
    <label for="informacion_adicional">Información Adicional:</label>
    <textarea name="informacion_adicional" id="informacion_adicional">{{ $superheroe->informacion_adicional }}</textarea>
    
    <button type="submit">Actualizar Superhéroe</button>
</form>
@endsection
