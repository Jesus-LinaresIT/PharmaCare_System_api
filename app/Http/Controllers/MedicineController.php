<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $productos = Medicine::with('salidas')->get();
        return response()->json($productos);
    }

    public function store(Request $request)
    {
        $producto = Medicine::create($request->all());
        return response()->json(['message' => 'Producto creado correctamente', 'data' => $producto]);
    }

    public function show($id)
    {
        $producto = Medicine::findOrFail($id);
        return response()->json($producto);
    }

    public function update(Request $request, $id)
    {
        $producto = Medicine::findOrFail($id);
        $producto->update($request->all());
        return response()->json(['message' => 'Producto actualizado correctamente', 'data' => $producto]);
    }

    public function destroy($id)
    {
        $producto = Medicine::findOrFail($id);
        $producto->delete();
        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}

