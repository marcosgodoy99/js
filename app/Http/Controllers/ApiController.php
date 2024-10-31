<?php

namespace App\Http\Controllers;
use App\Models\api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        try {
            $datos = $request->json()->all(); // Obtener todos los datos enviados

            // Guardar las IDs directamente, asumiendo que siempre hay resultados
            foreach ($datos['results'] as $request) {
                Api::create([
                    'id' => $request['id'],
                ]);
            }

            return response()->json(['status' => 'success', 'message' => 'IDs guardadas exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
