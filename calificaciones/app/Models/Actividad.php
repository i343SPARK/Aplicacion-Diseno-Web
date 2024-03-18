<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'calificacion', 'fecha', 'comentarios', 'materia_id'];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
