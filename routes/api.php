<?php

use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/clients', [ClientController::class, 'getClients']);
Route::post('/add-client', [ClientController::class, 'addClient']);
// Route::get('/edit-client/{id}', [ClientController::class, 'editClient']);
Route::put('/update-client/{id}', [ClientController::class, 'updateClient']);
Route::delete('/delete-client/{id}', [ClientController::class, 'deleteClient']);

Route::get('/project', [ProjectController::class, 'getProjects']);
Route::post('/add-project', [ProjectController::class, 'addProject']);
Route::put('/update-project/{id}', [ProjectController::class, 'updateProject']);
Route::delete('/delete-project/{id}', [ProjectController::class, 'deleteProject']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
