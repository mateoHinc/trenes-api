<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return response()->json($stations);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $station = Station::create($validated);
        return response()->json($station, 201);
    }

    public function show(string $id)
    {
        $station = Station::findOrFail($id);
        return response()->json($station);
    }

    public function update(Request $request, string $id)
    {
        $station = Station::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $station->update($validated);
        return response()->json($station);
    }

    public function destroy(string $id)
    {
        $station = Station::findOrFail($id);
        $station->delete();

        return response()->json(['message' => 'Estación Eliminada con éxito']);
    }
}
