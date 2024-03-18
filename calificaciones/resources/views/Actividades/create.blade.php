@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Actividad para la Materia: {{ $materia->nombre }}</h1>
    <form method="POST" action="{{ route('materias.actividades.store', $materia->id) }}">
        @csrf
        <label for="tipo">Tipo de Actividad:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="calificacion">Calificación:</label>
        <input type="number" id="calificacion" name="calificacion" step="0.01" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios"></textarea>

        <button type="submit">Guardar Actividad</button>
    </form>
</div>
@endsection
