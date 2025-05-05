<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;
use App\Models\Schedule;
use App\Models\Route;
use App\Models\Ticket;

class ReportController extends Controller
{
    public function trainUsage()
    {
        $trains = Train::with(['routes.schedules'])->get();

        $data = $trains->map(function ($train) {
            $capacity = $train->capacity;

            $scheduleIds = $train->routes
                ->flatMap(fn($route) => $route->schedules)
                ->pluck('id');

            $totalSeats = $capacity * $scheduleIds->count();

            $reservedTickets = Ticket::whereIn('schedule_id', $scheduleIds)
                ->where('status', 'reserved')
                ->count();

            $usage = $totalSeats > 0 ? round(($reservedTickets / $totalSeats) * 100, 2) : 0;

            return [
                'train_id' => $train->id,
                'train_name' => $train->name,
                'total_schedules' => $scheduleIds->count(),
                'capacity_per_schedule' => $capacity,
                'total_seats' => $totalSeats,
                'reserved_tickets' => $reservedTickets,
                'usage_percentage' => $usage,
            ];
        });

        return response()->json([
            'total_trains' => $data->count(),
            'report' => $data
        ]);
    }

    public function incomeReport()
    {
        $tickets = Ticket::whereIn('status', ['reserved', 'used'])->get();

        $total = $tickets->sum('price');

        $bySchedule = $tickets->groupBy('schedule_id')->map(function ($group) {
            return [
                'tickets_sold' => $group->count(),
                'income' => $group->sum('price'),
            ];
        });

        return response()->json([
            'total_income' => $total,
            'total_tickets' => $tickets->count(),
            'breakdown_by_schedule' => $bySchedule,
        ]);
    }
}
