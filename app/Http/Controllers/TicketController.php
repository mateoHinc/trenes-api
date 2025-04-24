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

    public function usersBySchedule(Request $request, $id)
    {
        $tickets = Ticket::with('user')
            ->where('schedule_id', $id)
            ->get();

        // Verifica si el usuario quiere una tabla (texto plano)
        if ($request->query('format') === 'table') {
            $table = "ID | Nombre          | Email                | Asiento | Estado\n";
            $table .= str_repeat('-', 65) . "\n";

            foreach ($tickets as $ticket) {
                $table .= sprintf(
                    "%-2s | %-14s | %-20s | %-7s |%-8s\n",
                    $ticket->user->id,
                    $ticket->user->name,
                    $ticket->user->email,
                    $ticket->seat_number,
                    $ticket->status
                );
            }

            return response($table, 200)->header('Content-Type', "text/plain");
        }
    }

    public function ticketsBySchedule($id)
    {
        $tickets = Ticket::with('user')
            ->where('schedule_id', $id)
            ->get();

        if ($tickets->isEmpty()) {
            return response()->json([
                'message' => 'No hay tickets para este horario.'
            ], 404);
        }

        $response = $tickets->map(function ($ticket) {
            return [
                'ticket_id' => $ticket->id,
                'user' => [
                    'id' => $ticket->user->id,
                    'name' => $ticket->user->name,
                    'email' => $ticket->user->email,
                ],
                'seat_number' => $ticket->seat_number,
                'status' => $ticket->status,
            ];
        });

        return response()->json([
            'schedule_id' => $id,
            'tickets' => $response
        ]);
    }

    public function cancel($id)
    {
        $ticket = Ticket::findOrFail($id);

        if ($ticket->status === 'canceled') {
            return response()->json([
                'message' => 'Este ticket ya está cancelado.'
            ], 400);
        }

        if ($ticket->status === 'used') {
            return response()->json([
                'message' => 'No se puede cancelar un ticket que ya fue usado.'
            ], 400);
        }

        if ($ticket->status === 'canceled') {
            return response()->json([
                'message' => 'Este ticket ya está cancelado.'
            ],);
        }

        $ticket->status = 'cancelled';
        $ticket->save();

        return response()->json([
            'message' => 'Ticket cancelado correctamente.',
            'ticket' => $ticket
        ]);
    }

    public function markAsUsed($id)
    {
        $ticket = Ticket::findOrFail($id);

        if ($ticket->status === 'used') {
            return response()->json([
                'message' => 'Este ticket ya fue utilizado.'
            ], 400);
        }

        if ($ticket->status === 'cancelled') {
            return response()->json([
                'message' => 'No se puede usar un ticket cancelado.'
            ], 400);
        }

        $ticket->status = 'used';
        $ticket->save();

        return response()->json([
            'message' => 'Ticket marcado como utilizado.',
            'ticket' => $ticket
        ]);
    }
}
