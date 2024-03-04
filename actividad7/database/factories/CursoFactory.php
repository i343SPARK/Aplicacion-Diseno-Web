<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso; // Asegúrate de que el namespace de tu modelo es correcto

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            // Definición de los atributos de tu modelo
            'curso_name' => $this->faker->sentence, // por ejemplo
            'kit_id' => $this->faker->numberBetween(1, 3), // asumiendo que tienes 3 kits
        ];
    }
}
