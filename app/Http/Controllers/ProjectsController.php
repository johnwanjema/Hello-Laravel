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

    public function update(Project $project)
    {
        $project->update(request(['name','description']));
        // $project->name = request('name');
        // $project->description = request('description');
        // $project->save();
        return redirect('/projects');
    }

    public function edit(Project $project)
    {

        return view('projects.edit', compact('project'));
    }

    public function delete(Project $project)
    {
        // Project::findOrFail($project->delete());
        $project->delete();
    }

    public function show(Project $project)
    {
        return $project ;

        return view('projects.show',compact('project'));
    }

    public function store()
    {
        Project::create($validate = request()->validate([
            'name'=> ['required','min:3'],
            'description' => ['required','max:255'],
        ]));

        // Project::create($validate);
        // dd(request()->all());
        // shortcut
        // Project::create([
        //     'name' => request('name'),
        //     'description' => request(('description')),
        // ]);
        //    longcut
        // $project = new project();
        // $project->name = request('name');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }
}
