<?php

namespace App\Http\Controllers;

use App\Models\Gebruiker;
use Illuminate\Http\Request;

class GebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Gebruiker::all();
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:gebruikers',
            // Add validation rules for other fields
        ]);

        // Create new Gebruiker instance
        $gebruiker = Gebruiker::create($validatedData);

        // Return success response
        return response()->json(['message' => 'Gebruiker created successfully', 'data' => $gebruiker], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gebruiker $gebruiker)
    {
        $response = $gebruiker;
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gebruiker $gebruiker)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:gebruikers,email,' . $gebruiker->id,
            // Add validation rules for other fields
        ]);

        // Update the Gebruiker record with the validated data
        $gebruiker->update($validatedData);

        // Return success response
        return response()->json(['message' => 'Gebruiker updated successfully', 'data' => $gebruiker], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gebruiker $gebruiker)
    {
        // Delete the Gebruiker record
        $gebruiker->delete();

        // Return a JSON response indicating success
        return response()->json(['message' => 'Gebruiker deleted successfully'], 200);
    }
}
