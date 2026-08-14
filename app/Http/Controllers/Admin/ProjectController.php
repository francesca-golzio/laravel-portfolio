<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->client = $data['client'];
        $newProject->period = $data['period'];
        $newProject->tags = [$data['tags']];
        $newProject->description = $data['description'];
        $newProject->personal_note = $data['personal_note'];

        $newProject->save();

        //dd($newProject);

        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        /* @dd($data); */
        
        $project->title = $data['title'];
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->tags = explode(',', $data['tags']);
        $project->description = $data['description'];
        $project->personal_note = $data['personal_note'];
        
        $project->update();
        
        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
