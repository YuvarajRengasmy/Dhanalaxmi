<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Our Services</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            font-weight: 600;
            color: #f9d342 !important;
        }
        .nav-link {
            color: #f4f4f9 !important;
        }
        .dropdown-menu {
        background-color: #343a40; /* Match navbar color */
        border: none; /* Remove border */
    }
    .dropdown-item {
        color: #ffffff; /* Text color */
    }
    .dropdown-item:hover {
        background-color: #495057; /* Darker on hover */
    }

    /* Show dropdown on hover */
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block; /* Show the dropdown */
    }
        footer {
            background-color: #343a40;
        }
        footer a {
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            text-decoration: underline;
            color: #f0c14b;
        }
        footer h5 {
            margin-bottom: 1.5em;
            font-weight: bold;
        }

        .services-banner {
            background-image: url('path/to/services-banner.jpg'); /* Background image for banner */
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
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #343a40;">
    <a class="navbar-brand" href="#">Dhanalaxmi Finovo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/services') }}" >
                    Services
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">Free Counselling</a>
                    <a class="dropdown-item" href="#">Free Visa Filling</a>
                    <a class="dropdown-item" href="#">Flight Bookings</a>
                    <a class="dropdown-item" href="#">Forex Cards</a>
                    <a class="dropdown-item" href="#">Internal Accommodation</a>
                    <a class="dropdown-item" href="#">International SIM Cards</a>
                </div>
            </li>
          

            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/studyabroad') }}" >
                    Study Abroad
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">Study in USA</a>
                    <a class="dropdown-item" href="#">Study in UK</a>
                    <a class="dropdown-item" href="#">Study in New Zealand</a>
                    <a class="dropdown-item" href="#">Study in Australia</a>
                    <a class="dropdown-item" href="#">Study in Singapore</a>
                    <a class="dropdown-item" href="#">Study in Malaysia</a>
                    <a class="dropdown-item" href="#">Study in Canada</a>
                    <a class="dropdown-item" href="#">Study in Dubai</a>
                    <a class="dropdown-item" href="#">Study in Germany</a>
                    <a class="dropdown-item" href="#">Study in Ukraine</a>
                    <a class="dropdown-item" href="#">Study in Mauritius</a>
                    <a class="dropdown-item" href="#">Study in Malta</a>
                    <a class="dropdown-item" href="#">Study in France</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/coaching') }}">Coaching</a></li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/certification') }}">Certifications</a></li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</nav>


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

    
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Free Counselling</a></li>
                    <li><a href="#" class="text-white">Free Visa Filling</a></li>
                    <li><a href="#" class="text-white">Flight Bookings</a></li>
                    <li><a href="#" class="text-white">Forex Cards</a></li>
                    <li><a href="#" class="text-white">Internal Accommodation</a></li>
                    <li><a href="#" class="text-white">International SIM Cards</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Study Abroad</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Study in USA</a></li>
                    <li><a href="#" class="text-white">Study in UK</a></li>
                    <li><a href="#" class="text-white">Study in New Zealand</a></li>
                    <li><a href="#" class="text-white">Study in Australia</a></li>
                    <li><a href="#" class="text-white">Study in Singapore</a></li>
                    <li><a href="#" class="text-white">Study in Malaysia</a></li>
                    <li><a href="#" class="text-white">Study in Canada</a></li>
                    <li><a href="#" class="text-white">Study in Dubai</a></li>
                    <li><a href="#" class="text-white">Study in Germany</a></li>
                    <li><a href="#" class="text-white">Study in Ukraine</a></li>
                    <li><a href="#" class="text-white">Study in Mauritius</a></li>
                    <li><a href="#" class="text-white">Study in Malta</a></li>
                    <li><a href="#" class="text-white">Study in France</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Connect with Us</h5>
                <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <hr class="my-4" style="border-top: 1px solid #ffffff;">
        <p class="mb-0">&copy; 2024 Dhanalaxmi Finovo | All Rights Reserved</p>
    </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
