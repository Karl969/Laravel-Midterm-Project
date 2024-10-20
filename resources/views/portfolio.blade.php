@extends('Components.layout')
@section('title', 'Portfolio Main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/Webpage.css') }}">
<div id="about" class="about-section">
    <h1 class="about-title">About Me</h1>
    <div class="about-content">
        <div class="about-image">
        </div>
        <div class="about-details">
        <div class="about-section">
            <p class="about-description">Karl Christian O. Carlos</p>
            <img src="{{ asset('assets/images/Portfolio_Pic.png') }}" alt="Layout" style="width: 100px;">
        </div>
            <h2>Education</h2>
            <ul>
                <li>Albay Central School (Elementary)</li>
                <li>Divine Word College of Legazpi (Junior High School)</li>
                <li>Divine Word College of Legazpi (Senior High School)</li>
                <li>Bicol University College of Science - Bachelor of Information Technology (College)</li>
            </ul>
            </div>
            <h3>Interests and Hobbies</h3>
            <ul>
                <li>Programming and Website Development</li>
                <li>PC Gaming</li>
                <li>Driving and Automobiles</li>
            </ul>
            <br><br>
            <p>E-Mail: <a href="kcoc2022-6285-95624@bicol-u.edu.ph">kcoc2022-6285-95624@bicol-u.edu.ph<a></p>
            <p>Phone Number: (+63) 9994733373</p>
            <p>Facebook:<a href=https://www.facebook.com/KarlForPresident>www.facebook.com<a></p>
        </div>
    </div>
@endsection
