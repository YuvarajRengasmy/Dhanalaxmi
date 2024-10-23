@extends('layouts.main')

@section('meta_title', 'Services | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

 <!-- Banner Section -->
 <header class="services-banner">
        <div class="container">
            <h1>Our Services</h1>
            <p>Helping you succeed on your educational journey.</p>
        </div>
    </header>

    <!-- Content Section -->
    <section class="services-content">
        <div class="container">
            <h2>What We Offer</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Consultation Services</h5>
                            <p class="card-text">Our expert consultants will guide you through the entire process of selecting the right program and university.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service2.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Application Assistance</h5>
                            <p class="card-text">We help you complete your application accurately and on time, ensuring you meet all requirements.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service3.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Visa Support</h5>
                            <p class="card-text">Get expert guidance on your student visa application to ensure a smooth process.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service4.jpg" class="card-img-top" alt="Service 4">
                        <div class="card-body">
                            <h5 class="card-title">Pre-Departure Briefing</h5>
                            <p class="card-text">Attend our pre-departure sessions to prepare for your new adventure abroad.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service5.jpg" class="card-img-top" alt="Service 5">
                        <div class="card-body">
                            <h5 class="card-title">Accommodation Assistance</h5>
                            <p class="card-text">We provide support in finding suitable accommodation near your university.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="path/to/service6.jpg" class="card-img-top" alt="Service 6">
                        <div class="card-body">
                            <h5 class="card-title">Ongoing Support</h5>
                            <p class="card-text">We are here to support you throughout your study abroad journey, addressing any concerns that arise.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <style>
       

        .services-banner {
            background-image: url('https://www.shutterstock.com/image-illustration/our-services-writing-3d-render-260nw-1877372119.jpg'); /* Background image for banner */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            color: white; /* Text color */
            padding: 100px 0; /* Padding for the banner */
            text-align: center; /* Center the text */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
        }

        .services-content {
            padding: 60px 0; /* Padding for content */
        }

        .service-card {
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        .service-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .service-card img {
            border-radius: 10px 10px 0 0; /* Rounded corners for image */
        }

        .services-content h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
            font-weight: bold; /* Bold headings */
        }

        .services-content p {
            color: #333; /* Dark text color */
            line-height: 1.6; /* Better readability */
            text-align: justify; /* Justified text */
        }

        .btn-primary {
            background-color: #106EBE; /* Blue button color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Button padding */
            transition: background-color 0.3s ease; /* Smooth transition */
            color: #fff; /* White text color */
        }

        .btn-primary:hover {
            background-color: #0D9F98; /* Darker blue on hover */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .services-content {
                padding: 30px 0; /* Reduced padding on small screens */
            }
            .services-banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
        }
    </style>

    



   

    
    

    
