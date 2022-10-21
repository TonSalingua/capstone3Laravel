<?php

use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\PendingClientController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\FreelancersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/clients', [ClientController::class, 'getClients']);
Route::post('/add-client', [ClientController::class, 'addClient']);
// Route::get('/edit-client/{id}', [ClientController::class, 'editClient']);
Route::put('/update-client/{id}', [ClientController::class, 'updateClient']);
Route::delete('/delete-client/{id}', [ClientController::class, 'deleteClient']);

Route::get('/pendingclients', [PendingClientController::class, 'getpendingClients']);
Route::post('/add-pendingclient', [PendingClientController::class, 'addpendingClient']);
// Route::get('/edit-client/{id}', [ClientController::class, 'editClient']);
Route::put('/update-pendingclient/{id}', [PendingClientController::class, 'updatependingClient']);
Route::delete('/delete-pendingclient/{id}', [PendingClientController::class, 'deletependingClient']);


Route::get('/project', [ProjectController::class, 'getProjects']);
Route::post('/add-project', [ProjectController::class, 'addProject']);
Route::put('/update-project/{id}', [ProjectController::class, 'updateProject']);
Route::delete('/delete-project/{id}', [ProjectController::class, 'deleteProject']);


Route::get('/freelancers', [FreelancersController::class, 'getFreelancers']);
Route::post('/add-freelancer', [FreelancersController::class, 'addFreelancer']);
Route::put('/update-freelancer/{id}', [FreelancersController::class, 'updateFreelancer']);
Route::delete('/delete-freelancer/{id}', [FreelancersController::class, 'deleteFreelancer']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
