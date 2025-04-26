<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Http\Requests\StoreRouteRequest;
use App\Http\Requests\UpdateRouteRequest;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::with(['train', 'origin', 'destination'])->get();
        return response()->json($routes);
    }

    public function store(StoreRouteRequest $request)
    {
        $validated = $request->validated();
        $route = Route::create($validated);
        return response()->json([
            'message' => 'Ruta creada exitosamente.',
            'route' => $route
        ], 201);
    }

    public function show(string $id)
    {
        $route = Route::with(['train', 'origin', 'destination'])->findOrFail($id);
        return response()->json($route);
    }

    public function update(UpdateRouteRequest $request, string $id)
    {
        $route = Route::findOrFail($id);

        $validated = $request->validated();

        $route->update($validated);
        return response()->json([
            'message' => 'Ruta actualizada correctamente.',
            'route' => $route
        ]);
    }

    public function destroy(string $id)
    {
        $route = Route::with('schedules')->findOrFail($id);

        if ($route->schedules->isNotEmpty()) {
            return response()->json([
                'message' => 'No se puede eliminar esta ruta porque tiene horarios asociados.'
            ], 400);
        }

        $route->delete();

        return response()->json(['message' => "Ruta Eliminada con éxito"]);
    }
}
