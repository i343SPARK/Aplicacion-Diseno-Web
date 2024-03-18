{{-- resources/views/superheroes/show.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>{{ $superheroe->nombre_conocido }}</h1>
<p>Nombre Real: {{ $superheroe->verdadero_nombre }}</p>
<img src="{{ $superheroe->url_foto }}" alt="Foto de {{ $superheroe->nombre_conocido }}">
<p>Información Adicional: {{ $superheroe->informacion_adicional }}</p>
<a href="{{ route('superheroes.index') }}">Volver a la lista</a>
@endsection
