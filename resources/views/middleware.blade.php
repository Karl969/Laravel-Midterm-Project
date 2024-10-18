@extends('Components.layout')

@section('title', 'Middleware')

@section('content')
    <h1>
        <a href="https://github.com/jhona06/jhona" target="_blank">4th Laboratory</a>
    </h1>
    <p>
        This section provides an overview of middleware in Laravel.
    <p>
        I learned that in Laravel, you can create custom middleware to handle specific functionality for your application. 
        This includes validating user requests, checking if a user is authenticated, or logging request details.
    </p>
    <p>
        I learned how to create middleware using the Artisan command, which allows you to define the logic that will run before or after a request is processed.
        Additionally, i learned how to modify kernel and how to register middleware so that it can function properly.
    </p>
@endsection

@section('footer')
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Laravel Project. All Rights Reserved.
        </div>
    </footer>
@endsection