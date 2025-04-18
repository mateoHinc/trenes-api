<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return response()->json($trains);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
        ]);

        $train = Train::create($validated);
        return response()->json($train, 201);
    }

    public function show(string $id)
    {
        $train = Train::findOrFail($id);
        return response()->json($train);
    }

    public function update(Request $request, string $id)
    {
        $train = Train::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'capacity' => 'sometimes|integer|min:1',
        ]);

        $train->update($validated);
        return response()->json($train);
    }

    public function destroy(string $id)
    {
        $train = Train::findOrFail($id);
        $train->delete();

        return response()->json(['message' => 'Tren Eliminado con éxito']);
    }
}
