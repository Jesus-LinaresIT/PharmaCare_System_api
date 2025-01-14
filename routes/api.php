<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SalidaController;

Route::resource('productos', MedicineController::class);
Route::resource('salidas', SalidaController::class);
