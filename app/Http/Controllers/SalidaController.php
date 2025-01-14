<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use App\Models\Medicine;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    public function index()
    {
        $salidas = Salida::get();
        return response()->json($salidas);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'medicines_id' => 'required|exists:medicines,id',
            'nombre_comercial' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'proveedor' => 'nullable|string|max:255',
            'presentacion' => 'nullable|string|max:255',
            'unidades' => 'required|integer|min:1',
            'fecha_salida' => 'required|date',
        ]);

        $salida = Salida::create($validatedData);

        // Reducir las unidades en la tabla productos
        $medicines = Medicine::findOrFail($request->medicines_id);
        if ($medicines->unidades < $request->unidades) {
            return response()->json(['error' => 'No hay suficientes unidades disponibles'], 400);
        }

        return response()->json(['message' => 'Salida registrada correctamente', 'data' => $salida], 201);
    }

    public function show($id)
    {
        $salida = Salida::with('medicines')->findOrFail($id);
        return response()->json($salida);
    }

    public function destroy($id)
    {
        $salida = Salida::findOrFail($id);
        $salida->delete();
        return response()->json(['message' => 'Salida eliminada correctamente']);
    }
}

