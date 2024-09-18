<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlotRequest;
use App\Http\Resources\SlotResource;
use App\Models\Slot;

class SlotController extends Controller
{
    public function index()
    {
        return SlotResource::collection(Slot::all());
    }

    public function store(SlotRequest $request)
    {
        $slot = Slot::create($request->validated());
        return new SlotResource($slot);
    }

    public function show(Slot $slot)
    {
        return new SlotResource($slot);
    }

    public function update(SlotRequest $request, Slot $slot)
    {
        $slot->update($request->validated());
        return new SlotResource($slot);
    }

    public function destroy(Slot $slot)
    {
        $slot->delete();
        return response()->noContent();
    }
}
