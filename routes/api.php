<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/standby-events', [EventController::class, 'standbyEventsNextWeek']);

Route::get('/events', [EventController::class, 'getEventsBetweenDates']);
Route::get('/flights/upcoming', [EventController::class, 'getUpcomingFlights']);
Route::get('/flights/from/{location}', [EventController::class, 'getFlightsFrom']);
Route::post('/rosters', [EventController::class, 'upload']);
