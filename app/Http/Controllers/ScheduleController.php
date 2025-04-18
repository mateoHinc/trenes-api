<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('route')->get();
        return response()->json($schedules);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'route_id' => 'required|exists:routes,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date|after:departure_time',
        ]);

        $schedule = Schedule::create($validated);
        return response()->json($schedule, 201);
    }

    public function show(string $id)
    {
        $schedule = Schedule::with('route')->findOrFail($id);
        return response()->json($schedule);
    }

    public function update(Request $request, string $id)
    {
        $schedule = Schedule::findOrFail($id);

        $validated = $request->validate([
            'route_id' => 'sometimes|exists:routes,id',
            'departure_time' => 'sometimes|date',
            'arrival_time' => 'sometimes|date|after:departure_time',
        ]);

        $schedule->update($validated);
        return response()->json($schedule);
    }

    public function destroy(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return response()->json(['message' => 'Horario Eliminado con éxito']);
    }
}
