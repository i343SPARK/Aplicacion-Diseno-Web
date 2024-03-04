<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoboticKit extends Model
{
    // ...

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'kit_id');
    }
}

