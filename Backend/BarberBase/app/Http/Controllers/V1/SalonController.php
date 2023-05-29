<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreSalonRequest;
use App\Http\Requests\V1\UpdateSalonRequest;
use App\Http\Resources\V1\SalonResource;
use App\Models\Salon;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SalonResource::collection(Salon::paginate(5));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalonRequest $request)
    {
        $salon = Salon::create($request->validated());

        return (new SalonResource($salon))
            ->additional(['message' => 'Salon created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Salon $salon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salon $salon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalonRequest $request, Salon $salon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salon $salon)
    {
        //
    }
}
