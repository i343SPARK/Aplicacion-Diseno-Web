@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Materias</h1>
    <a href="{{ route('materias.create') }}">Agregar Materia</a>
    <ul>
        @foreach ($materias as $materia)
            <li>{{ $materia->nombre }}</li>
            <!-- Agrega aquí más detalles y acciones como editar y eliminar -->
        @endforeach
    </ul>
</div>
@endsection
