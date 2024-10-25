@extends('layouts.main')

@section('meta_title', 'About | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<header class="about-banner">
<div class="overlay"></div>
    <div class="container">
        <h1>About Us</h1>
        <p>Your gateway to a world of educational opportunities.</p>
    </div>
</header>

<!-- Content Section -->
<section class="about-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-6 mb-4">
                <h2>Who We Are</h2>
                <p>We are a dedicated team passionate about providing students with the best study abroad opportunities. Our goal is to assist students in achieving their educational dreams while experiencing diverse cultures around the world.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>Our Mission</h2>
                <p>Our mission is to connect students with top universities and institutions worldwide, ensuring they receive high-quality education and support throughout their journey.</p>
            </div>
            <div class="col-md-6 mb-4">
                <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="Mission Image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Why Choose Us?</h2>
                <p>We offer personalized services tailored to your needs, expert advice, and extensive resources to make your study abroad experience seamless and enjoyable. Join thousands of satisfied students who have trusted us with their educational journeys!</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta">
    <div class="container">
        <h2>Ready to Start Your Journey?</h2>
        <p>Contact us today to learn more about your study abroad options!</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</section>

@endsection
    







