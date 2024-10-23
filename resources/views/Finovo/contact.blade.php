<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 1200px;
            margin: auto;
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

        h2 {
            color: #106EBE; /* Use your primary color */
        }

        .social-icons .btn {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .embed-responsive {
            height: 400px;
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


<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Get in Touch</h2>
            <p>If you have any questions, feel free to reach out to us. We will get back to you as soon as possible!</p>
            
            <form action="/contact", method= "post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" rows="4" placeholder="Your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
                @csrf
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Contact Information</h2>
            <ul class="list-unstyled">
                <li>
                    <i class="bi bi-geo-alt-fill"></i>
                    <strong>Address:</strong> 123 Main Street, Your City, Your Country
                </li>
                <li>
                    <i class="bi bi-telephone-fill"></i>
                    <strong>Phone:</strong> +1 234 567 890
                </li>
                <li>
                    <i class="bi bi-envelope-fill"></i>
                    <strong>Email:</strong> contact@example.com
                </li>
            </ul>
            <h2 class="mb-4">Follow Us</h2>
            <div class="social-icons">
                <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="btn btn-outline-primary"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Google Map Section -->
    <div class="row mt-5">
    <div class="col-12">
        <h2 class="mb-4">Our Location</h2>
        <div class="embed-responsive">
            <iframe class="embed-responsive-item" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57838.37950390939!2d80.19032506338723!3d13.038977993069373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5264b32e0e693f%3A0xa6d0a5f4bc3b6f5f!2s17%2F3A2%2C%20Gandhi%20St%20Alwartirunagar%2C%20Chennai%2C%20Tamil%20Nadu%20600087%2C%20India!5e0!3m2!1sen!2sin!4v1697954712995!5m2!1sen!2sin" 
                allowfullscreen="" 
                loading="lazy"></iframe>
        </div>
    </div>
</div>

</div>

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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
