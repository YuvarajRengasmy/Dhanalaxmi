@extends('layouts.main')

@section('meta_title', 'Services | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

 <!-- Banner Section -->
 <header class="services-banner">
    <div class='overlay'></div>
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
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Counselling</h5>
                            <p class="card-text">Our expert consultants will guide you through the entire process of selecting the right program and university.</p>
                            <a href="{{ url('/counselling') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Visa Filling</h5>
                            <p class="card-text">We help you complete your application accurately and on time, ensuring you meet all requirements.</p>
                            <a href="{{ url('/visa_filing') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Flight Bookings</h5>
                            <p class="card-text">Get expert guidance on your student visa application to ensure a smooth process.</p>
                            <a href="{{ url('/flight_bookings') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 4">
                        <div class="card-body">
                            <h5 class="card-title">Forex Cards</h5>
                            <p class="card-text">Attend our pre-departure sessions to prepare for your new adventure abroad.</p>
                            <a href="{{ url('/forex_cards') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 5">
                        <div class="card-body">
                            <h5 class="card-title">Internal Accomodation</h5>
                            <p class="card-text">We provide support in finding suitable accommodation near your university.</p>
                            <a href="{{ url('/accodomation') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 6">
                        <div class="card-body">
                            <h5 class="card-title">Interntional Sim Cards</h5>
                            <p class="card-text">We are here to support you throughout your study abroad journey, addressing any concerns that arise.</p>
                            <a href="{{ url('/international_simcard') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <style>
       

        .services-banner {
            position: relative; /* Position relative to contain absolute children */
    background-image: url('https://img.freepik.com/free-photo/website-hosting-concept-with-bright-light_23-2149406783.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.services-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.services-banner h1, .services-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
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

    



   

    
    

    
