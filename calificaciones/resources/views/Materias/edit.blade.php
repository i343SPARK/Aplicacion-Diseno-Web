@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Materia</h1>
    <form method="POST" action="{{ route('materias.update', $materia->id) }}">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre de la Materia:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $materia->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
