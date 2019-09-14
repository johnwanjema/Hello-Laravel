<?php

namespace App\Http\Controllers;

use App\project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function update($id)
    {
        $project = project::find($id);
        $project->name = request('name');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = project::find($id);

        return view('projects.edit', compact('project'));
    }

    public function delete()
    {
    }

    public function show($id)
    {
        $project = project::find($id);
        return view('projects.show',compact('project'));
    }

    public function store()
    {
        $project = new project();
        $project->name = request('name');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }
}
