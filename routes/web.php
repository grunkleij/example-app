<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Api\ProjectApiController;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/input',)

Route::post('/input', [ProjectController::class, 'store']);


//api
Route::get('/projects', [ProjectApiController::class, 'index']);      // Get all projects
Route::get('/projects/{id}', [ProjectApiController::class, 'show']); // Get single project
Route::post('/projects', [ProjectApiController::class, 'store']);    // Create project
Route::put('/projects/{id}', [ProjectApiController::class, 'update']); // Update project
Route::delete('/projects/{id}', [ProjectApiController::class, 'destroy']);

