<?php
use App\Http\Controllers\API\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/clients', [ClientController::class, 'getClients']);
Route::post('/add-client', [ClientController::class, 'addClient']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
