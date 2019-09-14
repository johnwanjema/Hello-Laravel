@extends('layout')

@section('content')
<h1 class="title">Edit project</h1>

<form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom:1em;">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input" type="text" name="name" placeholder="project name" value="{{ $project->name }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Description</label>
        <div class="control">
            <textarea class="textarea" name="description" placeholder="Description">{{ $project->description }}"</textarea>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Update project</button>
        </div>

    </div>
</form>
</form method='post'>
<div class="field is-grouped">
    <div class="control">
        <button class="button is-link">Delete project</button>
    </div>
</div>
<form>
    @endsection
