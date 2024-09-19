<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationPilotRequest;
use App\Http\Requests\StoreReservationPilotRequest;
use App\Http\Requests\UpdateReservationPilotRequest;
use App\Http\Resources\ReservationPilotResource;
use App\Models\ReservationPilot;

class ReservationPilotController extends Controller
{
    public function index()
    {
        return ReservationPilotResource::collection(ReservationPilot::all());
    }

    public function store(ReservationPilotRequest $request)
    {
        $reservationPilot = ReservationPilot::create($request->validated());
        return new ReservationPilotResource($reservationPilot);
    }

    public function show(ReservationPilot $reservationPilot)
    {
        return new ReservationPilotResource($reservationPilot);
    }

    public function update(ReservationPilotRequest $request, ReservationPilot $reservationPilot)
    {
        $reservationPilot->update($request->validated());
        return new ReservationPilotResource($reservationPilot);
    }

    public function destroy(ReservationPilot $reservationPilot)
    {
        $reservationPilot->delete();
        return response(null, 204);
    }
}
