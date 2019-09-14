@extends('layout')

@section('content')

<h1>Create Projects</h1>

<form method="POST" action="/projects">
{{ csrf_field()}}
    <div>
        <input type="text" required placeholder="title" name="name">
        <textarea type="text"  required placeholder="description" name="description"></textarea>
        <button type="submit">Create project</button>
    </div>
</form>

@endsection




