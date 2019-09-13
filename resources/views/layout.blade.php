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
    <p><a href="/">Home</a></P>
      <p><a href="/contact">Contact</a></P>
      <p><a href="/about">About us</a></P>
      @yield('content')

    </body>
</html>




