<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("dashboard", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $types = Type::all();    
    return view('projects.create', compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = new Project();
        $project->titolo=$data["titolo"];
        $project->link=$data["link"];
        $project->committente=$data["committente"];
        $project->consegna=$data["consegna"];
        $project->type_id = $data['type_id'];
        $project->save();

        return redirect()->route("projects.show", $project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
    $types = Type::all();      
    return view("projects.edit", compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data=$request->all();
        $project->titolo=$data["titolo"];
        $project->link=$data["link"];
        $project->committente=$data["committente"];
        $project->consegna=$data["consegna"];
        $project->type_id = $data['type_id'];
        $project->update();

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("dashboard");
    }
}
