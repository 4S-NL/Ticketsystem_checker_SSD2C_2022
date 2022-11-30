<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//add route to get all events
Route::get('events', [EventController::class, 'apiIndex']);

//add route to get single event by id
Route::get('event/{id}', [EventController::class, 'apiEvent']);

//add route to get single event by event (based on primary key)
Route::get('event1/{event}', [EventController::class, 'apiEvent1']);

//add route to get single event by event (instead of primary key now use event->name)
Route::get('event1/{event:name}', [EventController::class, 'apiEvent1']);




