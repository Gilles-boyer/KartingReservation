<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormulaRequest;
use App\Http\Requests\StoreFormulaRequest;
use App\Http\Requests\UpdateFormulaRequest;
use App\Http\Resources\FormulaResource;
use App\Models\Formula;

class FormulaController extends Controller
{
    public function index()
    {
        return FormulaResource::collection(Formula::all());
    }

    public function store(FormulaRequest $request)
    {
        $formula = Formula::create($request->validated());
        return new FormulaResource($formula);
    }

    public function show(Formula $formula)
    {
        return new FormulaResource($formula);
    }

    public function update(FormulaRequest $request, Formula $formula)
    {
        $formula->update($request->validated());
        return new FormulaResource($formula);
    }

    public function destroy(Formula $formula)
    {
        $formula->delete();
        return response()->noContent();
    }
}
