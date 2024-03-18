<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{

    // use HasFactory;

    protected $fillable = ['verdadero_nombre', 'nombre_conocido', 'url_foto', 'informacion_adicional'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $validatedData = $request->validate([
            'verdadero_nombre' => 'required|max:255',
            'nombre_conocido' => 'required|max:255',
            'url_foto' => 'nullable|url',
            'informacion_adicional' => 'nullable',
        ]);
    
        $superheroe = Superheroe::create($validatedData);
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Superheroe $superheroe)
    {
        //
        // $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Superheroe $superheroe)
    {
        //
        // $superheroe = Superheroe::findOrFail($id=1);
        // dd($superheroe);
        return view('superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Superheroe $superheroe)
    {
        //
        $validatedData = $request->validate([
            'verdadero_nombre' => 'required|max:255',
            'nombre_conocido' => 'required|max:255',
            'url_foto' => 'nullable|url',
            'informacion_adicional' => 'nullable',
        ]);

        Superheroe::whereId($id)->update($validatedData);
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Superheroe $superheroe)
    {
        //
        $superheroe = Superheroe::findOrFail(3);
        $superheroe->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado con éxito.');
    }
}
