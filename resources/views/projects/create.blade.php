<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','John wanjema')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

   <h1>Create Projects</h1>

<form method="POST" action="/projects">
{{ csrf_field()}}
    <div>
        <input type="text" placeholder="title" name="name">
        <textarea type="text" placeholder="description" name="description"></textarea>
        <button type="submit">Create project</button>
    </div>
</form>
    </body>
</html>




