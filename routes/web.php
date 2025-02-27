<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SDGController;
use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Api\ProjectApiController;
use App\Models\Project;


// Route::get("/", function(){
//     return view("home");
// });
// Route::get("/goalpage", function(){
//     return view("goalpage");
// });
Route::get('/', [SDGController::class, 'index'])->name('goals');
Route::get('/goalpage', [SDGController::class, 'index'])->name('goals');
Route::get('/goalpage/{id}', [SDGController::class, 'show'])->name('goal.details');
Route::get('/projectpage/{id}',[SDGController::class,'showproject'])->name('projectpage.page');
Route::resource('publications', controller: Publication::class);

Route::post('/publications', [PublicationController::class, 'store'])->name('publications.store');


// Route::get('/goalpage/{id}', [SDGController::class, 'showproject'])->name('goal.details');








Route::get('/in', function () {
    return view('welcome');
});
Route::get('/in/publication', function () {
    $projects = Project::all(); // Fetch all projects from the database
    return view('addnewpublication', compact('projects'));
});
Route::get('/test', [ProjectApiController::class,'allIndex']);
Route::get('/edit', function () {
    return view('edit');
});

// Route::post('/input',)

Route::post('/input', [ProjectController::class, 'store']);


//api
Route::get('/projects/{id}', [ProjectApiController::class, 'show']);

Route::get('/projects', [ProjectApiController::class, 'index']);      // Get all projects
Route::post('/projects', [ProjectApiController::class, 'store']);    // Create project
Route::put('/projects/{id}', [ProjectApiController::class, 'update']); // Update project
Route::delete('/projects/{id}', [ProjectApiController::class, 'destroy']);
Route::get('/projects/sdg/{id}', [ProjectApiController::class, 'getBySdg']);

Route::get('/projects/{id}/edit', [ProjectApiController::class, 'edit'])->name('projects.edit');
Route::get('/projects/{id}/delete', [ProjectApiController::class, 'delete'])->name('projects.delete');
Route::post('/projects/{id}/update', [ProjectApiController::class, 'update'])->name('projects.update');    


