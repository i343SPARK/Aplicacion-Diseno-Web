<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso; // Importa tu modelo Curso

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Llama a los seeders para usuarios y kits de robótica
        $this->call([
            UsersTableSeeder::class,        // Asegúrate de que este seeder exista y esté definido
            RoboticKitsTableSeeder::class,  // Asegúrate de que este seeder exista y esté definido
            // Agrega aquí cualquier otro seeder que hayas creado
        ]);
        // Utiliza la factory para generar 100 registros de cursos
        Curso::factory()->count(100)->create();// Asegúrate de que la ruta del modelo sea correcta
    }
}
