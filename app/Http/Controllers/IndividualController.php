<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndividualRequest;
use App\Http\Requests\UpdateIndividualRequest;
use App\Http\Resources\IndividualCollection;
use App\Http\Resources\IndividualResource;
use App\Http\Resources\SubscribersResource;
use App\Models\Individual;
use App\Models\Param;
// use App\Http\Resources\IndividualResource;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new IndividualCollection(Individual::with('params')->paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndividualRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Individual $individual)
    {
        return new IndividualResource(Individual::with('params')->find($individual->id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Individual $individual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndividualRequest $request, Individual $individual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Individual $individual)
    {
        //
    }
}
