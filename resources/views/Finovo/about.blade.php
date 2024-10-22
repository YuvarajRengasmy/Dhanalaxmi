<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        

        .navbar {
    background-color: #343a40; /* Dark background for the navbar */
}

.navbar-brand {
    font-weight: 600;
    color: #f9d342 !important; /* Brand color */
}

.nav-link {
    color: #f4f4f9 !important; /* Default link color */
    transition: color 0.3s ease; /* Smooth transition for hover effect */
}

.nav-link:hover {
    color: #0FFCBE !important; /* Color on hover for nav links */
}

.dropdown-menu {
    background-color: #343a40; /* Same background color for dropdown */
    border: none;
}

.dropdown-item {
    color: #ffffff; /* Default color for dropdown items */
    transition: background-color 0.3s ease; /* Smooth transition for dropdown hover */
}

.dropdown-item:hover {
    background-color: #0FFCBE; /* Color on hover for dropdown items */
}

.navbar-nav .dropdown:hover .dropdown-menu {
    display: block; /* Show dropdown on hover */
}

/* Active link style */
.nav-item.active .nav-link {
    color: #0FFCBE !important; /* Active state color for the nav link */
    font-weight: bold; /* Bold active link for emphasis */
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

        .about-banner {
            background-image: url('https://via.placeholder.com/1920x400');
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
            background-color: #0FFCBE;
            padding: 60px 0;
            color: #333;
            text-align: center;
        }

        .cta h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #106EBE;
            border: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0D9F98;
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
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Dhanalaxmi Finovo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link" href="{{ url('/index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/services') }}">Services</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Free Counselling</a>
                    <a class="dropdown-item" href="#">Free Visa Filling</a>
                    <a class="dropdown-item" href="#">Flight Bookings</a>
                    <a class="dropdown-item" href="#">Forex Cards</a>
                    <a class="dropdown-item" href="#">Internal Accommodation</a>
                    <a class="dropdown-item" href="#">International SIM Cards</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/studyabroad') }}">Study Abroad</a>
                <div class="dropdown-menu">
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
        <a href="#" class="btn btn-primary">Contact Us</a>
    </div>
</section>

<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Services</h5>
                <a href="#">Free Counselling</a><br>
                <a href="#">Free Visa Filling</a><br>
                <a href="#">Flight Bookings</a><br>
                <a href="#">Forex Cards</a><br>
            </div>
            <div class="col-md-4 mb-3">
                <h5>About Us</h5>
                <a href="#">Our Team</a><br>
                <a href="#">Testimonials</a><br>
                <a href="#">Blog</a><br>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Contact Us</h5>
                <p>Email: info@example.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <p>&copy; 2024 Dhanalaxmi Finovo. All rights reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
