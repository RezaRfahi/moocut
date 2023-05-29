<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSalonRequest;
use App\Http\Requests\UpdateSalonRequest;
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|unique:salons',
            'postcode' => 'required|string|unique:salons',
            'establish' => 'required|date',
            'status' => 'required|in:open,closed',
            'start' => 'required|date_format:H:i:s',
            'finish' => 'required|date_format:H:i:s',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'breaks' => 'nullable|string',
        ]);

        $salon = Salon::create($validatedData);

        return response()->json([
            'message' => 'Salon created successfully',
            'data' => $salon,
        ], 201);
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
