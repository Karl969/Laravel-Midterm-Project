@extends('Components.layout')

@section('title', 'Views and Routes')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
    <h1>
        <a href="https://github.com/Karl969/Laravel-Midterm-Project/tree/main/Docs" target="_blank">Laboratory 1</a>
    </h1>
    <h2>This section includes the installation of Laravel, and developing routes and views.</h2>
    <p>
        This section includes the lessons learned in using Laravel as a framework for developing websites. 
        I installed Laravel along with its dependencies, ensuring that my environment is set up properly with the parameters I chose. 
        Then I modified the '.env' file so that my project can work properly without any errors. 
        I then created views for the homepage, about us page, and welcome pages.
    </p>

    <div class="image-section">
        <h3>Section 1: Laravel Installation</h3>
        <img src="{{ asset('assets/images/1_laravel.png') }}" alt="Laravel Installation" style="width: 300px;">
        <p>
            This image illustrates the steps taken during the installation of Laravel. It highlights the commands used and
            the output displayed in the terminal as the framework and its dependencies are installed.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 2: Setting Up Routes</h3>
        <img src="{{ asset('assets/images/2_laravel.png') }}" alt="Routes Setup" style="width: 300px;">
        <p>
            This section shows how routes were defined in the 'web.php' file. Each route is connected to its respective view, 
            ensuring that the correct content is displayed when users navigate through different pages.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 3: Creating Views</h3>
        <img src="{{ asset('assets/images/3_laravel.png') }}" alt="Creating Views" style="width: 300px;">
        <p>
            This image showcases the views homepage and about us to demonstrate my basic implementation of creating views in Laravel.
        </p>
    </div>
@endsection
