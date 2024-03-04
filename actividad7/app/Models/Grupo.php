<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    // ...

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}