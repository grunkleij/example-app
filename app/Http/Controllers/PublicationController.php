<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Project;

class PublicationController extends Controller {
    public function index() {
        $publications = Publication::with('project')->get();
        return view('publications.index', compact('publications'));
    }

    public function create() {
        $projects = Project::all();
        return view('publications.create', compact('projects'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publication_link' => 'required|url',
            'sdg' => 'required|exists:projects,sdg'
        ]);

        Publication::create($request->all());

        return back()->with('success', 'Publication added successfully!');
    }

    public function show($id) {
        $publication = Publication::findOrFail($id);
        return view('publications.show', compact('publication'));
    }

    public function destroy($id) {
        $publication = Publication::findOrFail($id);
        $publication->delete();
        return back()->with('success', 'Publication deleted successfully!');
    }
}
