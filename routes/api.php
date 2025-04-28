<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StationController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

Route::apiResource('stations', StationController::class);

Route::get('/trains/available', [TrainController::class, 'availableTrains']);
Route::apiResource('trains', TrainController::class);

Route::apiResource('routes', RouteController::class);
Route::get('/trains/{id}/routes', [TrainController::class, 'trainRoutes']);
Route::patch('/trains/{id}/deactivate', [TrainController::class, 'toggleActive']);

Route::get('/schedules/today', [ScheduleController::class, 'todaySchedules']);
Route::get('/schedules/next', [ScheduleController::class, 'nextSchedules']);
Route::apiResource('schedules', ScheduleController::class);

Route::get('/tickets/active', [TicketController::class, 'activeTickets']);
Route::apiResource('tickets', TicketController::class);
Route::get('/schedules/{id}/users', [TicketController::class, 'usersBySchedule']);
Route::get('/tickets/schedule/{id}', [TicketController::class, 'ticketsBySchedule']);
Route::get('/tickets/history/user/{id}', [TicketController::class, 'userTicketHistory']);
Route::post('/tickets/{id}/use', [TicketController::class, 'markAsUsed']);
Route::post('/tickets/{id}/cancel', [TicketController::class, 'cancel']);

Route::get('/users/search', [UserController::class, 'search']);
Route::apiResource('users', UserController::class);
Route::get('/users/trashed', [UserController::class, 'onlyUsersTrashed']);
Route::get('/users/{id}/tickets', [UserController::class, 'userTickets']);
Route::put('/users/{id}/restore', [UserController::class, 'restore']);
Route::patch('/users/{id}/deactivate', [UserController::class, 'toggleActive']);
