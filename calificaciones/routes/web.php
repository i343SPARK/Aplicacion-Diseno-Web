<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ActividadController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materias', MateriaController::class);
Route::resource('materias.actividades', ActividadController::class);