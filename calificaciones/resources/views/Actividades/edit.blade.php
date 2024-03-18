@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Actividad</h1>
    <form method="POST" action="{{ route('materias.actividades.update', ['materia' => $materia->id, 'actividade' => $actividad->id]) }}">
        @csrf
        @method('PATCH')

        <label for="tipo">Tipo de Actividad:</label>
        <input type="text" id="tipo" name="tipo" value="{{ $actividad->tipo }}" required>

        <label for="calificacion">Calificación:</label>
        <input type="number" id="calificacion" name="calificacion" value="{{ $actividad->calificacion }}" step="0.01" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="{{ $actividad->fecha->format('Y-m-d') }}" required>

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios">{{ $actividad->comentarios }}</textarea>

        <button type="submit">Actualizar Actividad</button>
    </form>
</div>
@endsection