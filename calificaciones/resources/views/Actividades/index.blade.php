@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Actividades</h1>
    <a href="{{ route('materias.actividades.create', $materia->id) }}">Agregar Actividad</a>
    <ul>
        @foreach ($actividades as $actividad)
            <li>{{ $actividad->tipo }} - {{ $actividad->calificacion }}</li>
            <!-- Agrega aquí más detalles y acciones como editar y eliminar -->
        @endforeach
    </ul>
</div>
@endsection
