<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationSlotRequest;
use App\Http\Requests\StoreReservationSlotRequest;
use App\Http\Requests\UpdateReservationSlotRequest;
use App\Http\Resources\ReservationSlotResource;
use App\Models\ReservationSlot;

class ReservationSlotController extends Controller
{
    public function index()
    {
        return ReservationSlotResource::collection(ReservationSlot::all());
    }

    public function store(ReservationSlotRequest $request)
    {
        $reservationSlot = ReservationSlot::create($request->validated());
        return new ReservationSlotResource($reservationSlot);
    }

    public function show(ReservationSlot $reservationSlot)
    {
        return new ReservationSlotResource($reservationSlot);
    }

    public function update(ReservationSlotRequest $request, ReservationSlot $reservationSlot)
    {
        $reservationSlot->update($request->validated());
        return new ReservationSlotResource($reservationSlot);
    }

    public function destroy(ReservationSlot $reservationSlot)
    {
        $reservationSlot->delete();
        return response()->noContent();
    }
}
