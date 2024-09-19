<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationPilotController;
use App\Http\Controllers\ReservationSlotController;
use App\Http\Controllers\SlotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('slots', SlotController::class);
Route::apiResource('clients', ClientController::class);
Route::apiResource('reservations', ReservationController::class);
Route::apiResource('reservation-slots', ReservationSlotController::class);
Route::apiResource('pilots', PilotController::class);
Route::apiResource('formulas', FormulaController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('reservation-pilots', ReservationPilotController::class);
