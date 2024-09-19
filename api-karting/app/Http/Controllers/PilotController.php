<?php

namespace App\Http\Controllers;

use App\Http\Requests\PilotRequest;
use App\Http\Requests\StorePilotRequest;
use App\Http\Requests\UpdatePilotRequest;
use App\Http\Resources\PilotResource;
use App\Models\Pilot;

class PilotController extends Controller
{
    public function index()
    {
        return PilotResource::collection(Pilot::all());
    }

    public function store(PilotRequest $request)
    {
        $pilot = Pilot::create($request->validated());
        return new PilotResource($pilot);
    }

    public function show(Pilot $pilot)
    {
        return new PilotResource($pilot);
    }

    public function update(PilotRequest $request, Pilot $pilot)
    {
        $pilot->update($request->validated());
        return new PilotResource($pilot);
    }

    public function destroy(Pilot $pilot)
    {
        $pilot->delete();
        return response()->noContent();
    }
}
