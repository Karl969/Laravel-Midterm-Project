<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 21px;
    }

    .navbar {
        background-color: green !important;
    }

    .navbar-brand,
    .nav-link {
        color: white!important;
    }

    .nav-link:hover {
        color: black !important; 
    }

    footer {
        background-color: green !important;
        padding: 10px 0;
    }

    footer .text-center {
        color: black!important;
    }

    h1 {
        font-size: 30px;
        font-weight: bold; 
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/portfolio">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/middleware">Middleware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/routes">Routes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/layout">Layout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Individual Laboratory</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Laravel Project. All Rights Reserved.
        </div>
    </footer>
</html>