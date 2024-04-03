<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceptController;
use App\Http\Controllers\GebruikerController;

Route::get('/user', function () {
    return auth()->user(); // Dit retourneert de geauthenticeerde gebruiker
})->middleware('auth:sanctum');

// Routes voor Recepten
Route::apiResource('recepten', ReceptController::class)->only(['index', 'show']);
Route::post('recepten', [ReceptController::class, 'store']);
Route::put('recepten/{recept}', [ReceptController::class, 'update']);
Route::delete('recepten/{recept}', [ReceptController::class, 'destroy']);
Route::get('recepten/{id}/gebruikers', [ReceptController::class, 'indexRecept']);
Route::delete('recepten/{id}/gebruikers', [ReceptController::class, 'destroyRecept']);

// Routes voor Gebruikers
Route::apiResource('gebruikers', GebruikerController::class)->only(['index', 'show']);
Route::post('gebruikers', [GebruikerController::class, 'store']);
Route::put('gebruikers/{gebruiker}', [GebruikerController::class, 'update']);
Route::delete('gebruikers/{gebruiker}', [GebruikerController::class, 'destroy']);

// Fallback route voor niet-gevonden pagina's
Route::get('/user', function () {
    return auth()->user(); // Dit retourneert de geauthenticeerde gebruiker
})->middleware('auth:sanctum');

