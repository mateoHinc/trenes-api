<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['user', 'schedule.route'])->get();
        return response()->json($tickets);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:schedules,id',
            'seat_number' => 'required|integer|min:1',
            'status' => 'in:reserved,cancelled,used'
        ]);

        // Validate that entries are not repeated
        $exists = Ticket::where('schedule_id', $request->schedule_id)
            ->where('seat_number', $request->seat_number)
            ->exists();

        if ($exists) {
            return response()->json(['error' => 'Ese asiento ya está reservado.'], 422);
        }

        // Validate that the capacity is not exceeded
        $schedule = \App\Models\Schedule::with('route.train')->findOrFail($request->schedule_id);
        $ticketsCount = Ticket::where('schedule_id', $request->schedule_id)->count();
        $capacity = $schedule->route->train->capacity;

        if ($ticketsCount >= $capacity) {
            return response()->json(['error' => 'Capacidad máxima alcanzada para este tren.'], 422);
        }

        $ticket = Ticket::create($validated);
        return response()->json($ticket, 201);
    }

    public function show(string $id)
    {
        $ticket = Ticket::with(['user', 'schedule.route'])->findOrFail($id);
        return response()->json($ticket);
    }

    public function update(Request $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $validated = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'schedule_id' => 'sometimes|exists:schedules,id',
            'seat_number' => 'sometimes|integer|min:1',
            'status' => 'sometimes|in:reserved,cancelled,used'
        ]);

        $ticket->update($validated);
        return response()->json($ticket);
    }

    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return response()->json(['message' => 'Ticket Eliminado con éxito']);
    }
}
