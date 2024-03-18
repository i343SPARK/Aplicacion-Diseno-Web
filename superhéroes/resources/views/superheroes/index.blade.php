{{-- resources/views/superheroes/index.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>Lista de Superhéroes</h1>
<a href="{{ route('superheroes.create') }}">Crear Nuevo Superhéroe</a>
<table>
  <thead>
    <tr>
      <th>Nombre Real</th>
      <th>Nombre de Superhéroe</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($superheroes as $superheroe)
      <tr>
        <td>{{ $superheroe->verdadero_nombre }}</td>
        <td>{{ $superheroe->nombre_conocido }}</td>
        <td>
          <a href="{{ route('superheroes.show', $superheroe->id) }}">Ver</a>
          <a href="{{ route('superheroes.edit', $superheroe->id) }}">Editar</a>
          <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
