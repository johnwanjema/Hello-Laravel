@extends('layout')

@section('content')
<h1 class="title">{{  $project->name  }}</h1>
<p class="content">{{  $project->description }}</p>

<p><a href="/projects/{{$project->id}}/edit">Edit project</a></p>
@endsection
