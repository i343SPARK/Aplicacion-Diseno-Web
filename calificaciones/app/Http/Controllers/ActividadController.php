<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Materia;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index(Materia $materia)
    {
        $actividades = $materia->actividades;
        return view('actividades.index', compact('actividades', 'materia'));
    }

    public function create(Materia $materia)
    {
        return view('actividades.create', compact('materia'));
    }

    public function store(Request $request, Materia $materia)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|max:255',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
            'comentarios' => 'nullable',
        ]);

        $materia->actividades()->create($validatedData);
        return redirect()->route('materias.actividades.index', $materia);
    }

    public function show(Materia $materia, Actividad $actividad)
    {
        return view('actividades.show', compact('actividad', 'materia'));
    }

    public function edit(Materia $materia, Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad', 'materia'));
    }

    public function update(Request $request, Materia $materia, Actividad $actividad)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|max:255',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
            'comentarios' => 'nullable',
        ]);

        $actividad->update($validatedData);
        return redirect()->route('materias.actividades.index', $materia);
    }

    public function destroy(Materia $materia, Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('materias.actividades.index', $materia);
    }
}
