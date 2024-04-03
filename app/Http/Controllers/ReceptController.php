<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Recept::all();
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        // Create a new Recept instance
        $recept = Recept::create($validatedData);

        // Return success response
        return response()->json(['message' => 'Recept created successfully', 'data' => $recept], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recept $recept)
    {
        return response()->json($recept, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recept $recept)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        // Update the Recept record with the validated data
        $recept->update($validatedData);

        // Return success response
        return response()->json(['message' => 'Recept updated successfully', 'data' => $recept], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recept $recept)
    {
        // Delete the Recept record
        $recept->delete();

        // Return success response
        return response()->json(['message' => 'Recept deleted successfully'], 200);
    }
}
