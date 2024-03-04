<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'username' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'rol' => 'Administrativo',
                // Asegúrate de añadir el resto de los campos necesarios aquí
            ],
            [
                'username' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'rol' => 'Docente',
                // Asegúrate de añadir el resto de los campos necesarios aquí
            ],
            [
                'username' => 'Estudiante',
                'email' => 'estudiante@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'rol' => 'Estudiante',
                // Asegúrate de añadir el resto de los campos necesarios aquí
            ],
        ]);
    }
}
