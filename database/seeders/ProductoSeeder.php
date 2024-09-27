<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            array(
                'nombre' => "Pedigree",
                'precio' => 59.9,
                'imagen' => "comida_01",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Ricocat",
                'precio' => 49.9,
                'imagen' => "comida_02",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Super Cat",
                'precio' => 54.9,
                'imagen' => "comida_03",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Ricocan",
                'precio' => 54.9,
                'imagen' => "comida_04",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Whiskas",
                'precio' => 54.9,
                'imagen' => "comida_05",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Hueso de juguete",
                'precio' => 39.9,
                'imagen' => "juguete_01",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('productos')->insert($data);
    }
}
