<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Http\Requests\StoreTrainRequest;
use App\Http\Requests\UpdateTrainRequest;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return response()->json($trains);
    }

    public function store(StoreTrainRequest $request)
    {

        $train = Train::create($request->validated());

        return response()->json([
            'message' => 'Tren creado exitosamente.',
            'train' => $train
        ], 201);
    }

    public function show(string $id)
    {
        $train = Train::findOrFail($id);
        return response()->json($train);
    }

    public function update(UpdateTrainRequest $request, string $id)
    {
        $train = Train::findOrFail($id);

        $train->update($request->validated());

        return response()->json([
            'message' => 'Tren actualizado correctamente.',
            'train' => $train
        ]);
    }

    public function destroy(string $id)
    {
        $train = Train::with('routes')->findOrFail($id);

        if ($train->routes->isNotEmpty()) {
            return response()->json([
                'message' => 'No se puede eliminar el tren porque tiene rutas asignadas'
            ], 400);
        }

        $train->delete();

        return response()->json(['message' => 'Tren Eliminado con éxito']);
    }

    public function trainRoutes($id)
    {
        $train = Train::with(['routes.origin', 'routes.destination'])->findOrFail($id);

        if ($train->routes->isEmpty()) {
            return response()->json([
                'message' => 'Este tren no tiene rutas asignadas.'
            ], 404);
        }

        $routes = $train->routes->map(function ($route) {
            return [
                'route_id' => $route->id,
                'origin' => $route->origin->name ?? 'Origen no disponible',
                'destination' => $route->destination->name ?? 'Destino no disponible',
            ];
        });

        return response()->json([
            'train' => [
                'id' => $train->id,
                'name' => $train->name,
            ],
            'routes' => $routes
        ]);
    }

    public function availableTrains()
    {
        $trains = Train::doesntHave('routes')->get();

        if ($trains->isEmpty()) {
            return response()->json([
                'message' => 'No hay trenes disponibles sin rutas asignadas.'
            ], 404);
        }

        return response()->json([
            'total' => $trains->count(),
            'trains' => $trains
        ]);
    }

    public function toggleActive($id)
    {
        $train = Train::findOrFail($id);

        $train->is_active = !$train->is_active;
        $train->save();

        return response()->json([
            'message' => $train->is_active
                ? 'Tren activado correctamente.'
                : 'Tren desactivado correctamente.',
            'train' => $train
        ]);
    }
}
