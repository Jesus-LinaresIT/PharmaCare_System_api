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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre_comercial');
            $table->text('descripcion')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('presentacion')->nullable();
            $table->integer('unidades');
            $table->integer('limite');
            $table->enum('estado', ['OK', 'COMPRAR'])->default('OK');
            $table->string('lote_no')->nullable();
            $table->date('fecha_exp')->nullable();
            $table->date('entrada_producto')->default(DB::raw('CURRENT_DATE'));
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
