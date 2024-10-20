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
        to all my views to standardize my webpage.
    </p>
@endsection
