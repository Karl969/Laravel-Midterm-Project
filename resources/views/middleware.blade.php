@extends('Components.layout')

@section('title', 'Middleware')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
    <h1>
        <a href="https://github.com/jhona06/jhona" target="_blank"><h1>Laboratory 4</h1></a>
    </h1>
    <h2>
        This section provides an overview of middleware in Laravel.
    </h2>
        I learned that in Laravel, you can create custom middleware to handle specific functionality for your application. 
        This includes validating user requests, checking if a user is authenticated, or logging request details.
    </p>
    <p>
        I learned how to create middleware using the Artisan command, which allows you to define the logic that will run before or after a request is processed.
        Additionally, i learned how to modify kernel and how to register middleware so that it can function properly. 
    </p>

    <div class="image-section">
        <h3>Section 1: Log Request Middleware</h3>
        <img src="{{ asset('assets/images/9_laravel.png') }}" alt="Middleware1" style="width: 300px;">
        <p>
            This image showcases a middleware that is implemented to log http requests made by the user to a txt file called log.txt for easier navigation tracking and error handling.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 2: Age Verification Middleware</h3>
        <img src="{{ asset('assets/images/10_laravel.png') }}" alt="Middleware2" style="width: 300px;">
        <p>
            This section shows a middleware that verifies the age of a user based on input parameter "age", its main function is to allow or reject users based on their age.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 3: Creating Views</h3>
        <img src="{{ asset('assets/images/11_laravel.png') }}" alt="Age Controller" style="width: 300px;">
        <p>
            This image shows the implementation of a controller in laravel that verifies and determines the age of the user whenever they are allowed to order in the website or not.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 4: Creating Views</h3>
        <img src="{{ asset('assets/images/12_laravel.png') }}" alt="Routes Configuration" style="width: 300px;">
        <p>
            This image shows the the route implementation for the middleware and controllers and how they work inside the website.
        </p>
    </div>
@endsection
