
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
</head>
<body>

<nav>
    <ul>
        <li><a href="{{ route('About') }}">About Us</a></li>
        <li><a href="{{ route('Content') }}">Content</a></li>
    </ul>
</nav>

    <section id="home">
        <h1>Homepage</h1>
        <img src="{{ asset('assets/images/1925_FORD.jpg') }}" alt="1925 Ford car">
        <p>Discover the world of automobiles.</p>
    </section>

    <section id="about">
        <h2>About Cars</h2>
        <p>Cars are vehicles that travel on roads. They come in various types, from small city cars to large SUVs and luxury sedans.</p>
    </section>

    <section id="types">
        <h2>Types of Cars</h2>
        <ul>
            <li>Sedans</li>
            <li>SUVs</li>
            <li>Sports cars</li>
            <li>Trucks</li>
            <li>Minivans</li>
            <li>Hybrids</li>
            <li>Electric cars</li>
        </ul>
    </section>

    <footer>
        &copy; 2024 CAR LOSE AUTOMOBILES
    </footer>
</body>
</html>