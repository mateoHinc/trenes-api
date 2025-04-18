<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::with(['train', 'origin', 'destination'])->get();
        return response()->json($routes);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'train_id' => 'required|exists:trains,id',
            'origin_station_id' => 'required|exists:stations,id',
            'destination_station_id' => 'required|exists:stations,id',
        ]);
        $route = Route::create($validated);
        return response()->json($route, 201);
    }

    public function show(string $id)
    {
        $route = Route::with(['train', 'origin', 'destination'])->findOrFail($id);
        return response()->json($route);
    }

    public function update(Request $request, string $id)
    {
        $route = Route::findOrFail($id);

        $validated = $request->validate([
            'traind_id' => 'sometimes|exists:trains,id',
            'origin_station_id' => 'sometimes|exists:stations,id',
            'destination_station_id' => 'sometimes|exists:stations,id',
        ]);

        $route->update($validated);
        return response()->json($route);
    }

    public function destroy(string $id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        return response()->json(['message' => "Ruta Eliminada con éxito"]);
    }
}
