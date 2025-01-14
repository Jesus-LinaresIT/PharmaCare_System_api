<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llama al seeder de productos
        $this->call(MedicinesTableSeeder::class);
        //$this->call(SalidasTableSeeder::class);
    }
}
