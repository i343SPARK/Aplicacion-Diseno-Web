<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoboticKitsTableSeeder extends Seeder
{
    public function run()
    {
        // Aquí insertas los kits de robótica que el cliente te ha proporcionado
        // Por ejemplo:
        DB::table('robotic_kits')->insert([
            ['kit_name' => 'StarterKit'],
            ['kit_name' => 'Educational Robotics Kit'],
            ['kit_name' => 'Kit5'],
        ]);
    }
}
