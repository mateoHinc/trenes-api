<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

    public function nextSchedules()
    {
        $now = Carbon::now();
        $next24h = $now->copy()->addHours(24);

        $schedules = Schedule::with(['route.origin', 'route.destination', 'route.train'])
            ->whereBetween('departure_time', [$now, $next24h])
            ->orderBy('departure_time')
            ->get();

        if ($schedules->isEmpty()) {
            return response()->json([
                'message' => 'No hay horarios programados en las próximas 24 horas.'
            ], 404);
        }

        return response()->json([
            'total' => $schedules->count(),
            'schedules' => $schedules
        ]);
    }
}
