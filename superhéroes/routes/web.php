<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('superheroes', SuperheroeController::class);