<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['user', 'schedule.route'])->get();
        return response()->json($tickets);
    }

    public function store(StoreTicketRequest $request)
    {
        $validated = $request->validated();

        // Validate if the user already has a ticket for this schedule
        $duplicate = Ticket::where('user_id', $validated['user_id'])
            ->where('schedule_id', $validated['schedule_id'])
            ->exists();

        if ($duplicate) {
            return response()->json([
                'message' => 'Este usuario ya tiene un ticket para este horario.'
            ], 422);
        }

        // Validate that entries are not repeated
        $exists = Ticket::where('schedule_id', $request->schedule_id)
            ->where('seat_number', $request->seat_number)
            ->exists();

        if ($exists) {
            return response()->json(['error' => 'Ese asiento ya está reservado.'], 422);
        }

        // Validate that the capacity is not exceeded
        $schedule = Schedule::with('route.train')->findOrFail($request->schedule_id);
        $ticketsCount = Ticket::where('schedule_id', $request->schedule_id)->count();
        $capacity = $schedule->route->train->capacity;

        if ($ticketsCount >= $capacity) {
            return response()->json(['error' => 'Capacidad máxima alcanzada para este tren.'], 422);
        }

        $ticket = Ticket::create($validated);
        return response()->json([
            'message' => 'Ticket creado exitosamente.',
            'ticket' => $ticket
        ], 201);
    }

    public function show(string $id)
    {
        $ticket = Ticket::with(['user', 'schedule.route'])->findOrFail($id);
        return response()->json($ticket);
    }

    public function update(UpdateTicketRequest $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $validated = $request->validated();

        $ticket->update($validated);
        return response()->json([
            'message' => 'Ticket actualizado correctamente.',
            'ticket' => $ticket
        ]);
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

    public function activeTickets()
    {
        $tickets = Ticket::with('user', 'schedule.route.train')
            ->where('status', 'reserved')
            ->get();

        if ($tickets->isEmpty()) {
            return response()->json([
                'message' => 'No hay tickets activos.'
            ], 404);
        }

        return response()->json([
            'total' => $tickets->count(),
            'tickets' => $tickets
        ]);
    }

    public function userTicketHistory($id)
    {
        $user = User::with(['tickets.schedule.route.train'])->findOrFail($id);

        if ($user->tickets->isEmpty()) {
            return response()->json([
                'message' => 'Este usuario no tiene tickets registrados.'
            ], 404);
        }

        $history = $user->tickets->map(function ($ticket) {
            return [
                'ticket_id' => $ticket->id,
                'seat_number' => $ticket->seat_number,
                'status' => $ticket->status,
                'schedule' => [
                    'departure_time' => $ticket->schedule->departure_time,
                    'arrival_time' => $ticket->schedule->arrival_time,
                ],
                'route' => [
                    'origin' => $ticket->schedule->route->origin->name ?? 'N/A',
                    'destination' => $ticket->schedule->route->destination->name ?? 'N/A',
                    'train' => $ticket->schedule->route->train->name ?? 'N/A',
                ]
            ];
        });

        return response()->json([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'tickets' => $history
        ]);
    }
}
