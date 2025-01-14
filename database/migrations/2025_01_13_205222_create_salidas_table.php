<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('medicine_id')->constrained('medicines')->onDelete('cascade'); // Relación con productos
            $table->string('nombre_comercial');
            $table->text('descripcion')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('presentacion')->nullable();
            $table->integer('unidades');
            $table->date('fecha_salida')->default(DB::raw('CURRENT_DATE'));
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
