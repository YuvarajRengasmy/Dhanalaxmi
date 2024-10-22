<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Study Abroad</title>
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
        .banner {
            background-image: url('path/to/study-abroad-banner.jpg'); /* Background image for banner */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            color: white; /* Text color */
            padding: 100px 0; /* Padding for the banner */
            text-align: center; /* Center the text */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
        }

        .banner h1 {
            font-size: 3em; /* Font size for the main heading */
        }

        .banner p {
            font-size: 1.5em; /* Font size for the subheading */
        }

        .countries-section {
            padding: 60px 0; /* Padding for content */
        }

        .country-card {
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        .country-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .country-card img {
            border-radius: 10px 10px 0 0; /* Rounded corners for image */
        }

        .countries-section h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
            font-weight: bold; /* Bold headings */
        }

        .countries-section p {
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
            .banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
            .banner h1 {
                font-size: 2.5em; /* Reduced font size for heading on small screens */
            }
            .banner p {
                font-size: 1.2em; /* Reduced font size for subheading on small screens */
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
    <header class="banner">
        <div class="container">
            <h1>Study Abroad Opportunities</h1>
            <p>Explore the world while you study in some of the best universities.</p>
        </div>
    </header>

    <!-- Countries Section -->
    <section class="countries-section">
        <div class="container">
            <h2>Explore Our Top Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/uk-flag.jpg" class="card-img-top" alt="Study in UK">
                        <div class="card-body">
                            <h5 class="card-title">Study in UK</h5>
                            <p class="card-text">Experience world-class education in the UK. Discover diverse cultures and innovative teaching methods.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/usa-flag.jpg" class="card-img-top" alt="Study in USA">
                        <div class="card-body">
                            <h5 class="card-title">Study in USA</h5>
                            <p class="card-text">Join leading universities in the USA, known for their academic excellence and vibrant campus life.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/australia-flag.jpg" class="card-img-top" alt="Study in Australia">
                        <div class="card-body">
                            <h5 class="card-title">Study in Australia</h5>
                            <p class="card-text">Explore stunning landscapes while receiving a high-quality education in Australia’s top institutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/new-zealand-flag.jpg" class="card-img-top" alt="Study in New Zealand">
                        <div class="card-body">
                            <h5 class="card-title">Study in New Zealand</h5>
                            <p class="card-text">Enjoy a unique study experience in New Zealand’s breathtaking landscapes and renowned institutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/singapore-flag.jpg" class="card-img-top" alt="Study in Singapore">
                        <div class="card-body">
                            <h5 class="card-title">Study in Singapore</h5>
                            <p class="card-text">Discover cutting-edge research and innovation at Singapore’s top universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/malaysia-flag.jpg" class="card-img-top" alt="Study in Malaysia">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malaysia</h5>
                            <p class="card-text">Experience a multicultural environment and affordable education in Malaysia’s top universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/canada-flag.jpg" class="card-img-top" alt="Study in Canada">
                        <div class="card-body">
                            <h5 class="card-title">Study in Canada</h5>
                            <p class="card-text">Benefit from a high standard of education and a diverse cultural experience in Canada.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/dubai-flag.jpg" class="card-img-top" alt="Study in Dubai">
                        <div class="card-body">
                            <h5 class="card-title">Study in Dubai</h5>
                            <p class="card-text">Experience a unique blend of culture and education in one of the world's most vibrant cities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/germany-flag.jpg" class="card-img-top" alt="Study in Germany">
                        <div class="card-body">
                            <h5 class="card-title">Study in Germany</h5>
                            <p class="card-text">Benefit from high-quality education and numerous study programs in English.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/ukraine-flag.jpg" class="card-img-top" alt="Study in Ukraine">
                        <div class="card-body">
                            <h5 class="card-title">Study in Ukraine</h5>
                            <p class="card-text">Experience affordable education with diverse programs in Ukraine's universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/mauritius-flag.jpg" class="card-img-top" alt="Study in Mauritius">
                        <div class="card-body">
                            <h5 class="card-title">Study in Mauritius</h5>
                            <p class="card-text">Discover beautiful beaches and a vibrant educational environment in Mauritius.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/malta-flag.jpg" class="card-img-top" alt="Study in Malta">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malta</h5>
                            <p class="card-text">Enjoy a unique Mediterranean experience while pursuing your studies in Malta.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="path/to/france-flag.jpg" class="card-img-top" alt="Study in France">
                        <div class="card-body">
                            <h5 class="card-title">Study in France</h5>
                            <p class="card-text">Experience rich history, culture, and world-class education in France.</p>
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
