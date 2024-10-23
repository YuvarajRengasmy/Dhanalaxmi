@extends('layouts.main')

@section('meta_title', 'About | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<header class="about-banner">
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
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
</section>

@endsection
    <style>
       
        .about-banner {
            background-image: url('https://www.shutterstock.com/image-photo/female-hands-typing-on-laptop-260nw-1729282783.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .about-content {
            padding: 60px 0;
        }

        .about-content h2 {
            color: #106EBE;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .about-content p {
            color: #333;
            line-height: 1.6;
            text-align: justify;
        }

        .cta {
            background-color: #f0f1f0;
            padding: 60px 0;
            color: #333;
            text-align: center;
        }

        .cta h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }

       

       

        .img-fluid {
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .img-fluid:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .about-content img {
                margin-bottom: 20px;
            }

            .about-content {
                padding: 30px 0;
            }

            .about-banner {
                padding: 60px 0;
            }
        }
    </style>








