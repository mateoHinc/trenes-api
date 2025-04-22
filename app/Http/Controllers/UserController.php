<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::withTrashed()->get()); //Muestran todos los usuarios incluyendo usuarios eliminados temporalmente
        // return response()->json(User::all());
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user = User::create($data);

        return response()->json($user, 201);
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        return response()->json($user);
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message', 'Usuario Eliminado con éxito']);
    }

    public function onlyUsersTrashed()
    {
        $users = User::onlyTrashed()->get();

        return response()->json([
            'data' => $users
        ]);
    }

    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);

        if (!$user->trashed()) {
            return response()->json(['message' => 'El usuario no está eliminado.']);
        }

        $user->restore();

        return response()->json(['message' => 'Usuario restaurado correctamente']);
    }

    public function userTickets($id)
    {
        $user = User::findOrFail($id);

        $tickets = $user->tickets()
            ->with(['schedule.route.origin', 'schedule.route.destination', 'schedule.route.train'])
            ->get()
            ->map(function ($ticket) {
                return [
                    'ticket_id' => $ticket->id,
                    'seat_number' => $ticket->seat_number,
                    'status' => $ticket->status,
                    'schedule' => [
                        'departure_time' => $ticket->schedule->departure_time,
                        'arrival_time' => $ticket->schedule->arrival_time,
                    ],
                    'route' => [
                        'origin' => $ticket->schedule->route->origin->name,
                        'destination' => $ticket->schedule->route->destination->name,
                        'train' => $ticket->schedule->route->train->name,
                    ]
                ];
            });

        return response()->json([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'tickets' => $tickets,
        ]);
    }
}
