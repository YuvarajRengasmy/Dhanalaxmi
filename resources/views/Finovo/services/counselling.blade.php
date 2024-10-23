@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
  <!-- Header / Banner Section -->
  <header class="banner">
        <div class="container">
            <h1>Counselling Services</h1> <!-- Update for each page -->
            <p>Expert guidance to achieve your academic dreams.</p>
            <button class="btn btn-custom mt-3">Learn More</button>
        </div>
    </header>

    <!-- Service Information Section -->
    <section class="info-section">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h2 class="section-title">Why Choose Our Counselling Services?</h2> <!-- Update for each page -->
                    <div class="info-content">
                        <h3>Personalized Support</h3>
                        <p>We offer expert guidance and customized plans to help students achieve their academic goals. Our experienced counselors work closely with you to find the right path based on your interests, financial needs, and aspirations.</p>
                        <p>Whether you're applying for a visa, selecting a course, or need pre-departure advice, we are here to make your journey easier.</p>
                        <button class="btn btn-custom">Contact Us</button>
                    </div>
                </div>

             
          
                <div class="col-md-5">
                <h2 class="section-title">Get In Touch</h2>
                    <div class="contact-form">
                      @include('components.generalenquiry')
                    </div>
                </div>
            </div>
        </div>
       
            
           
       
    </section>

    <!-- Icon / What We Offer Section -->
    <section class="icon-section">
        <div class="container">
            <h2 class="section-title">What We Offer</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-card">
                        <i class="fas fa-globe"></i>
                        <h5>Global University Guidance</h5>
                        <p>Our counselors provide you with global university insights to make informed decisions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                        <i class="fas fa-user-graduate"></i>
                        <h5>Admission Support</h5>
                        <p>Get help with your university applications and admissions processes worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                        <i class="fas fa-passport"></i>
                        <h5>Visa Assistance</h5>
                        <p>We simplify the visa process, ensuring you meet all requirements without stress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <!-- Custom CSS -->
    <style>
      
        /* Header / Banner Section */
        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('path/to/banner-image.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .banner h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        .banner p {
            font-size: 1.25rem;
        }

        /* Service Information Section */
        .section-title {
            font-weight: bold;
            color: #106EBE;
            margin-bottom: 40px;
            text-align: center;
        }

        .info-section {
            padding: 60px 0;
        }

        .info-content {
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .info-content h3 {
            color: #0FFCBE;
        }

        .info-content p {
            margin-bottom: 20px;
        }

        /* Attractive Buttons */
        .btn-custom {
            background-color: #106EBE;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0D9F98;
        }

        /* Contact Form */
        .contact-form {
            padding: 40px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Icons Section */
        .icon-section {
            padding: 60px 0;
            background-color: #eef7f8;
        }

        .icon-card {
            border: none;
            text-align: center;
            padding: 40px 20px;
            background: white;
            transition: transform 0.3s ease;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .icon-card:hover {
            transform: translateY(-10px);
        }

        .icon-card i {
            font-size: 3rem;
            color: #106EBE;
        }

        .icon-card h5 {
            margin-top: 20px;
            font-size: 1.5rem;
        }

        .icon-card p {
            margin-top: 10px;
            font-size: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.5rem;
            }

            .info-section {
                padding: 30px 0;
            }
        }
    </style>


  
 

   