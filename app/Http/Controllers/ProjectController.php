<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller {
    public function store(Request $request) {
        // dd($request->all());
        // // $file_name ='';
        // // if( $request->hasFile('photo') ) {
        
        // }
        try {
            // Validate input
            $validated = $request->validate([
                'project_name' => 'required|string|max:255',
                'sdg' => 'required|integer',
                'upcoming_project' => 'sometimes|boolean',
                'start_date' => 'nullable|date',
                'description' => 'nullable|string',
                'photo' => 'required|file|mimes:jpeg,png,jpg,gif|max:6000',
            ]);

            // Read file contents for storing as BLOB
            $photoData = file_get_contents($request->file('photo')->getRealPath());

            // Insert into database
            Project::create([
                'project_name' => $request->project_name,
                'sdg' => $request->sdg,
                'upcoming_project' => $request->has('upcoming_project'),
                'start_date' => $request->start_date,
                'description' => $request->description,
                'photo' => $photoData, // Store image as BLOB
            ]);

            return back()->with('success', 'Project saved successfully!');
        } catch (\Exception $e) {
            Log::error("Insert failed: " . $e->getMessage());
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function show($id) {
        $project = Project::findOrFail($id);
        return response($project->photo)->header('Content-Type', 'image/jpeg');
    }
    }