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
                'sdg'=> $project->sdg,
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
    public function show($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
    
        if (!$project) {
            return Response::json(['message' => 'Project not found'], 404);
        }
    
        $projectData = [
            'id' => $project->id,
            'title' => $project->project_name,
            'description' => $project->description,
            'sdg' => $project->sdg,
            'upcoming_project' => $project->upcoming_project,
            'start_date' => $project->start_date,
            'photo' => $project->photo ? 'data:image/jpeg;base64,' . base64_encode($project->photo) : null,
        ];
    
        return Response::json($projectData);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
    
        $project->update([
            'project_name' => $request->project_name,
            'sdg' => $request->sdg,
            'upcoming_project' => $request->has('upcoming_project') ? 1 : 0,
            'start_date' => $request->start_date,
            'description' => $request->description,
        ]);
    
        // Handle Image Upload (Optional)
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $project->photo = $photoPath;
            $project->save();
        }
    
        return redirect()->route('projects.edit', $id)->with('success', 'Project updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $project = Project::find($id);
    
        if (!$project) {
            return redirect('/')->with('error', 'Project not found');
        }
    
        $project->delete();
    
        return redirect('/allproj')->with('success', 'Project deleted successfully!');
    }
    
    

    public function getBySdg($sdg)
{
    $projects = DB::table('projects')->where('sdg', $sdg)->get();

    if ($projects->isEmpty()) {
        return Response::json(['message' => 'No projects found for this SDG'], 404);
    }

    $projects = $projects->map(function ($project) {
        return [
            'id' => $project->id,
            'title' => $project->project_name,
            'description' => $project->description,
            'sdg' => $project->sdg,
            'upcoming_project' => $project->upcoming_project,
            'start_date' => $project->start_date,
            'photo' => $project->photo ? 'data:image/jpeg;base64,' . base64_encode($project->photo) : null,
        ];
    });

    return Response::json($projects);
}
public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('edit', compact('project'));
}

public function allIndex()
{
    $projects = Project::all(); // Fetch all projects
    return view('all', compact('projects'));
}


}
