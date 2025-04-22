<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StationController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

Route::apiResource('stations', StationController::class);

Route::apiResource('trains', TrainController::class);

Route::apiResource('routes', RouteController::class);

Route::apiResource('schedules', ScheduleController::class);

Route::apiResource('tickets', TicketController::class);
Route::get('/schedules/{id}/users', [TicketController::class, 'usersBySchedule']);

Route::apiResource('users', UserController::class);
Route::get('/users/trashed', [UserController::class, 'onlyUsersTrashed']);
