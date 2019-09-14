@extends('layout')
@section('content')
<h1 class="title">My projects</h1>
<ul>
    @foreach($projects as $project)
    <li>
        <a href="/projects/{{ $project->id}}">
            {{$project->name}}
        </a>
    </li>
    @endforeach
</ul>
</body>
@endsection
