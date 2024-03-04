<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // ...

    public function kit()
    {
        return $this->belongsTo(RoboticKit::class, 'kit_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}

