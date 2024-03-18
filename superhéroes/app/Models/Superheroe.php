<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use HasFactory;
    protected $fillable = ['verdadero_nombre', 'nombre_conocido', 'url_foto', 'informacion_adicional'];
}
