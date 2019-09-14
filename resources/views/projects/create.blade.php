@extends('layout')

@section('content')

<h1 class="title">Create Projects</h1>

<form method="POST" action="/projects" style="marigin-bottom: 1em;">
    {{ csrf_field()}}
    <div>
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input {{ $errors->has('name') ? 'is-danger': ''}}" type="text" name="name" placeholder="project name" value="{{old('name')}}">
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea {{ $errors->has('name') ? 'is-danger': ''}}" name="description" placeholder="Description">{{old('description')}}"</textarea>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Create project</button>
            </div>

        </div>

        <!-- <input type="text" placeholder="title" name="name">
        <textarea type="text" required placeholder="description" name="description"></textarea>
        <button type="submit">Create project</button> -->
    </div>
    @if($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif



</form>

@endsection
