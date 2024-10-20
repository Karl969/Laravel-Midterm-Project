@extends('Components.layout')

@section('title', 'Layout Overview')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
    <h1>
        <a href="https://github.com/jhona06/jhona" target="_blank">Laboratory 3</a>
    </h1>
    <h2>
    This section includes the implementation of a layout file to standardize view structure and standardizes layout.
    </h2>
    <p>
        In this section, I learned that in Laravel, layouts are a powerful feature that allows you to define a common structure for your views.
        They enable you to avoid repeating the same HTML structure across multiple pages, making your application easier to maintain.
        It helped me significantly as it reduced the need to repeat the same lines of code and instead put it in a layout file and apply it
        to all my views to standardize our webpage.
    </p>

    <div class="image-section">
        <h3>Section 1: Layout Implementation</h3>
        <img src="{{ asset('assets/images/7_laravel.png') }}" alt="Layout" style="width: 300px;">
        <p>
            This image shows the layout.blade file being setup as a reusable template for the whole website to promote standardization.
        </p>
    </div>

    <div class="image-section">
        <h3>Section 2: Setting Up Routes</h3>
        <img src="{{ asset('assets/images/8_laravel.png') }}" alt="Routes Setup" style="width: 300px;">
        <p>
            This section shows how routes were defined in the 'web.php' file. Each route is connected to its respective view, 
            ensuring that the correct content is displayed when users navigate through different pages.
        </p>
    </div>
@endsection
