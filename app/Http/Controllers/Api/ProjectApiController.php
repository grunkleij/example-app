<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class ProjectApiController extends Controller
{
 
    public function index()
    {
        $projects = DB::table('projects')->get();
    
        $projects = $projects->map(function ($project) {
            return [
                'id' => $project->id,
                'title' => $project->project_name   ,
                'description' => $project->description,
                'upcoming_project'=> $project->upcoming_project,
                'start_date'=> $project->start_date,
                'photo' => $project->photo ? 'data:image/jpeg;base64,' . base64_encode($project->photo) : null,
            ];
        });
    
        return Response::json($projects);
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
