<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/travel/{flight_id}/{user_id}', [TravelController::class, 'show']);

Route::delete('/travel/{flight_id}/{user_id}', [TravelController::class, 'destroy']);
