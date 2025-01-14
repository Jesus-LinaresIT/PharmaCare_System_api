<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalidasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('salidas')->insert([
            [
                'medicines_id' => 5, // Relacionado con productos
                'nombre_comercial' => 'Ibuprofeno 400mg',
                'descripcion' => 'Ibuprofeno, Almidón de maíz, Celulosa microcristalina.',
                'proveedor' => 'Laboratorios Farmacéuticos S.A.',
                'presentacion' => 'Caja con 20 tabletas',
                'unidades' => 10,
                'fecha_salida' => '2025-01-14'
            ],
            [
                'medicines_id' => 6, // Relacionado con productos
                'nombre_comercial' => 'Paracetamol 500mg',
                'descripcion' => 'Paracetamol, Almidón pregelatinizado.',
                'proveedor' => 'Laboratorios Vida S.A.',
                'presentacion' => 'Caja con 10 tabletas',
                'unidades' => 5,
                'fecha_salida' => '2025-01-15'
            ],
        ]);
    }
}
