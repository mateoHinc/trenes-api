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
        $train = Train::findOrFail($id);
        $train->delete();

        return response()->json(['message' => 'Tren Eliminado con éxito']);
    }
}
