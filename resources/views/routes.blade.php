@extends('Components.layout')

@section('title', 'Layout Overview')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
<a href="https://github.com/jhona06/jhona" target="_blank"><h1>Laboratory 2</h1></a>
    <h2>
        This section provides an overview using and implementation of routes with proper redirecting and creating simple forms in Laravel.
    </h2>
    <p>
        This section heavily focuses on the usage and proper implementation of routes. I learned that in laravel routes are important as they are the one 
        responsible for the navigation of the user on a site. I also learned how to make forms with laravel that can handle user input and use it in different views.

        <div class="image-section">
        <h3>Section 1: Landing Page implementation</h3>
        <img src="{{ asset('assets/images/4_laravel.png') }}" alt="Welcome Hompage" style="width: 300px;">
        <p>
            This image showcases the implementation of a landing page that is first shown to the user.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 2: Setting Up Routes</h3>
        <img src="{{ asset('assets/images/5_laravel.png') }}" alt="Routes Setup" style="width: 300px;">
        <p>
            This section shows how routes were defined in the 'web.php' file. Each route is connected to its respective view, 
            ensuring that the correct content is displayed when users navigate through different pages.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 3: Contact Form Implementation</h3>
        <img src="{{ asset('assets/images/6_laravel.png') }}" alt="Contact Form" style="width: 300px;">
        <p>
            This image showcases the basic implementation of a contact form that accepts user name and uses it to display a welcome message with the name being used as a parameter.
        </p>
    </div>
@endsection
