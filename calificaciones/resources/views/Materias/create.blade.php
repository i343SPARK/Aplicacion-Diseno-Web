@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Materia</h1>
    <form method="POST" action="{{ route('materias.store') }}">
        @csrf
        <label for="nombre">Nombre de la Materia:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
