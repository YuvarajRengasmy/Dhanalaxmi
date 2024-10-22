<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhanalaxmi Finovo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8F9FA;
           
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



        .hero {
            background: url('your-hero-image.jpg') no-repeat center center/cover;
        
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 4em;
            font-weight: 600;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .hero p {
            font-size: 1.5em;
            margin-bottom: 60px;
        }


        .service-box {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background:#fff;
    }
    .service-box:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }
    .service-box i {
        color: #007bff; /* Default color for icons */
    }
    .service-box:hover i {
        color: #0056b3; /* Darker color on hover */
    }
    
        .btn-primary {
            background-color: #f9d342;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #ff9900;
        }
        .about, .services, .testimonials, .contact {
            padding: 60px 0;
        }
        h2 {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 40px;
        }
        .services .col-md-4 h3, .testimonials .col-md-4 blockquote {
            color: #343a40;
        }
        .services .col-md-4 {
            text-align: center;
        }
        .services .col-md-4 i {
            font-size: 3em;
            color: #f9d342;
            margin-bottom: 20px;
        }

        .contact {
        background-color: #f9f9f9;
    }
    .visa-assessment {
        background-color: #fff;
        border: 1px solid #dee2e6;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .visa-assessment:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }
    .visa-assessment h3 {
        color: #333;
    }
    .visa-assessment p {
        color: #555;
    }
    .visa-assessment ul {
        padding-left: 20px;
    }
    .visa-assessment ul li {
        font-size: 1.1em;
    }
    .btn-outline-primary {
        color: #007bff;
        border-color: #007bff;
    }
    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .testimonial-card {
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    .star-rating {
        color: #f39c12;
    }
    blockquote {
        font-style: italic;
        color: #555;
    }
    .blockquote-footer {
        font-size: 0.9em;
        color: #777;
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
    color: #f0c14b; /* Gold color on hover */
}

    footer h5 {
        margin-bottom: 1.5em;
        font-weight: bold;
    }


    .study-abroad {
    background-color: #f4f4f9; /* Light background for contrast */
    padding: 60px 0;
}

.study-card {
    border: none; /* No border for cards */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation */
}

.study-card:hover {
    transform: translateY(-10px); /* Lift effect on hover */
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15); /* Shadow effect */
}

.study-card img {
    height: 200px; /* Fixed height for consistency */
    object-fit: cover; /* Cover the entire space */
}

.card-title {
    font-weight: bold; /* Bold title */
    color: #106EBE; /* Blue color */
}

.card-text {
    color: #555; /* Grey color for text */
    margin-bottom: 1.5em; /* Space below text */
}

.btn-primary {
    background-color: #0FFCBE; /* Mint color */
    border: none; /* Remove border */
    transition: background-color 0.3s ease; /* Smooth transition */
}

.btn-primary:hover {
    background-color: #0D9F98; /* Darker mint on hover */
}

        
    </style>
</head>
<body>

<!-- <header class="header bg-dark text-white pb-5 pt-3 m-0 d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info">
            <span class="me-3">Email: info@dhanalaxmifinovo.com</span>
           
        </div>
        
          
            <button class="btn btn-outline-light me-3" >Talk with Our Experts</button>
           
      
<button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#exampleModal">
 Enquiry Now
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div> -->
    
</header>




    <!-- Navigation Bar -->
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
                    <a class="dropdown-item"  href="{{ url('/study_in_us') }}">Study in USA</a>
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

    <!-- Hero Section -->
    <section id="home" class="hero">
    <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#heroCarousel" data-slide-to="1"></li>
            <li data-target="#heroCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <!-- Slide 1: Studying in the UK -->
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1920x1080?text=Study+in+the+UK" class="d-block w-100" alt="Study in the UK">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Study in the UK</h1>
                    <p>Pursue your higher education in the world's most renowned universities. Unlock endless opportunities for personal and professional growth.</p>
                    <a href="#contact" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Slide 2: Discover Canada -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080?text=Discover+Canada" class="d-block w-100" alt="Discover Canada">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Study in Canada</h1>
                    <p>Experience top-quality education and embrace the vibrant cultural diversity in one of the world’s friendliest countries.</p>
                    <a href="#contact" class="btn btn-primary">Get Started</a>
                </div>
            </div>

            <!-- Slide 3: Explore Opportunities in Australia -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080?text=Explore+Australia" class="d-block w-100" alt="Explore Australia">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Study in Australia</h1>
                    <p>Take advantage of world-class education in Australia, where innovation meets a high quality of life for students.</p>
                    <a href="#contact" class="btn btn-primary">Explore Now</a>
                </div>
            </div>
        </div>

        <!-- Carousel Controls (Optional) -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



    <!-- About Us Section -->
    <section id="about" class="about bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x400" alt="About Us Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="text-center mb-4">About Us</h2>
                <p>At Dhanalaxmi Overseas, we are committed to providing top-notch overseas education services that guide students in achieving their academic goals. With a team of expert consultants and over a decade of experience, we have successfully helped students gain admissions to prestigious universities across the globe.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3"><i class="fas fa-graduation-cap mr-2"></i>Expert guidance on university applications</li>
                    <li class="mb-3"><i class="fas fa-passport mr-2"></i>Comprehensive visa assistance for a smooth journey</li>
                    <li class="mb-3"><i class="fas fa-home mr-2"></i>Accommodation support tailored to your needs</li>
                    <li class="mb-3"><i class="fas fa-plane-departure mr-2"></i>Travel and pre-departure advice for students</li>
                </ul>
            </div>
        </div>
        <!-- Additional Dummy Content -->
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <i class="fas fa-globe fa-3x mb-3"></i>
                <h4>Global Reach</h4>
                <p>We have partnered with over 200 universities in more than 10 countries, offering a wide range of study destinations.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-user-friends fa-3x mb-3"></i>
                <h4>Personalized Support</h4>
                <p>Our team of dedicated consultants work closely with each student, offering personalized solutions for their academic journey.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-certificate fa-3x mb-3"></i>
                <h4>Proven Success</h4>
                <p>With hundreds of success stories, we take pride in helping students secure admissions and scholarships at their dream universities.</p>
            </div>
        </div>
    </div>
</section>






    <!-- Services Section -->

    <section id="services" class="services py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="service-box  p-4 border rounded shadow"> 
                    <i class="fas fa-graduation-cap fa-3x mb-3 text-primary"></i>
                    <h4>Admission Guidance</h4>
                    <p>Our experts work with you to identify your academic goals and guide you in securing admission to top universities across the globe. We assist in choosing the right program that fits your career aspirations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-passport fa-3x mb-3 text-success"></i>
                    <h4>Visa Assistance</h4>
                    <p>We simplify the complex visa process by providing step-by-step guidance. From document preparation to interviews, we ensure you have everything in place for a smooth visa approval experience.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-home fa-3x mb-3 text-info"></i>
                    <h4>Accommodation Support</h4>
                    <p>Finding accommodation abroad can be challenging. We help you secure safe, affordable, and convenient housing options close to your university, ensuring a comfortable stay during your studies.</p>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-plane-departure fa-3x mb-3 text-danger"></i>
                    <h4>Travel & Forex Assistance</h4>
                    <p>We assist with travel arrangements, including flight bookings and travel insurance. Additionally, we provide foreign exchange services, helping you manage your finances abroad with ease.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-hand-holding-usd fa-3x mb-3 text-warning"></i>
                    <h4>Financial Assistance</h4>
                    <p>We offer guidance on scholarships, student loans, and financial planning to help ease the financial burden of studying abroad. Let us help you explore funding opportunities to make your dreams a reality.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-secondary"></i>
                    <h4>Test Preparation</h4>
                    <p>We offer comprehensive test preparation services for exams like IELTS, TOEFL, and GMAT. Our experienced instructors ensure you achieve your desired scores to enhance your university applications.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="study-abroad" class="study-abroad py-5">
    <div class="container">
        <h2 class="text-center mb-4">Study Abroad</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="path/to/uk-flag.jpg" class="card-img-top" alt="Study in UK">
                    <div class="card-body">
                        <h5 class="card-title">Study in UK</h5>
                        <p class="card-text">Experience world-class education in the UK. Discover diverse cultures and innovative teaching methods.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="path/to/usa-flag.jpg" class="card-img-top" alt="Study in USA">
                    <div class="card-body">
                        <h5 class="card-title">Study in USA</h5>
                        <p class="card-text">Join leading universities in the USA, known for their academic excellence and vibrant campus life.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="path/to/australia-flag.jpg" class="card-img-top" alt="Study in Australia">
                    <div class="card-body">
                        <h5 class="card-title">Study in Australia</h5>
                        <p class="card-text">Explore stunning landscapes while receiving a high-quality education in Australia’s top institutions.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




  

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">What Our Students Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="https://via.placeholder.com/80" alt="Student 1" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"The best education consultancy I've ever worked with!"</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 1</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="https://via.placeholder.com/80" alt="Student 2" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"They made my visa process so easy. Highly recommended."</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 2</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="https://via.placeholder.com/80" alt="Student 3" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"Thanks to their team, I got into my dream university!"</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 3</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="fas fa-star text-muted"></i>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Contact Section -->
    <section id="contact" class="contact py-5">
    <div class="container">
        <h2 class="text-center mb-3">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="tel" class="form-control" id="mobile" placeholder="Your Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <label for="visa">Select Visa Type</label>
                        <select class="form-control" id="visa" required>
                            <option value="" disabled selected>Select Visa Type</option>
                            <option value="student">Student Visa</option>
                            <option value="work">Work Visa</option>
                            <option value="tourist">Tourist Visa</option>
                            <option value="student">Business Visa</option>
                            <option value="work">Family Visa</option>
                            <option value="tourist">Visitor Visa</option>
                            <option value="tourist">Migrate Visa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="visa-assessment p-4 border rounded shadow bg-light">
                    <h3 class="text-center mb-3">Free Online Visa Assessment</h3>
                    <p>Not sure about the visa options available for you? Fill out our quick assessment form and get personalized guidance from our experts.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Quick assessment process
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Tailored recommendations
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Expert support and advice
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-block">Start Assessment</a>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Footer -->
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


   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
