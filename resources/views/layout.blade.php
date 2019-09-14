<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','John wanjema')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">

    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="/" class="navbar-item">
                Home
            </a>
            <a href="/projects" class="navbar-item">
                Projects
            </a>
            <a href="/projects/create" class="navbar-item">
                new project
            </a>
            <a href="/projects/1/edit" class="navbar-item">
                Edit project
            </a>
            <a href='/contact' class="navbar-item">
                Contacts
            </a>
            <a href='/about' class="navbar-item">
                About us
            </a>

        </div>


    </div>
</nav>

<body>
    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>

</html>
