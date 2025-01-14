<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('medicines')->insert([
            [
                'nombre_comercial' => 'Ibuprofeno 400mg',
                'descripcion' => 'Ibuprofeno, Almidón de maíz, Celulosa microcristalina, Dióxido de silicio, Estearato de magnesio.',
                'proveedor' => 'Laboratorios Farmacéuticos S.A.',
                'presentacion' => 'Caja con 20 tabletas',
                'unidades' => 100,
                'limite' => 30,
                'estado' => 'OK',
                'lote_no' => 'LOT123IBU',
                'fecha_exp' => '2025-02-25',
                'entrada_producto' => '2025-01-13'
            ],
            [
                'nombre_comercial' => 'Paracetamol 500mg',
                'descripcion' => 'Paracetamol, Almidón pregelatinizado, Estearato de magnesio.',
                'proveedor' => 'Laboratorios Vida S.A.',
                'presentacion' => 'Caja con 10 tabletas',
                'unidades' => 150,
                'limite' => 50,
                'estado' => 'COMPRAR',
                'lote_no' => 'LOT123PAR',
                'fecha_exp' => '2024-12-01',
                'entrada_producto' => '2025-01-13'
            ],
        ]);
    }
}
