<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Coaching Services</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .banner {
            background-image: url('path/to/coaching-banner.jpg'); /* Background image for banner */
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

        .coaching-section {
            padding: 60px 0; /* Padding for content */
        }

        .coaching-card {
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        .coaching-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .coaching-card img {
            border-radius: 10px 10px 0 0; /* Rounded corners for image */
        }

        .coaching-section h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
            font-weight: bold; /* Bold headings */
        }

        .coaching-section p {
            color: #333; /* Dark text color */
            line-height: 1.6; /* Better readability */
            text-align: justify; /* Justified text */
        }

        .testimonial-section {
            background-color: #ffffff; /* White background for testimonials */
            padding: 60px 0; /* Padding for content */
        }

        .testimonial-card {
            border: 1px solid #ddd; /* Light border */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Padding for card */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .testimonial-section h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
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

    <!-- Banner Section -->
    <header class="banner">
        <div class="container">
            <h1>Coaching Services</h1>
            <p>Your path to success starts here.</p>
        </div>
    </header>

    <!-- Coaching Programs Section -->
    <section class="coaching-section">
        <div class="container">
            <h2>Our Coaching Programs</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/language-coaching.jpg" class="card-img-top" alt="Language Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Language Coaching</h5>
                            <p class="card-text">Enhance your communication skills in a new language with our expert coaches.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/career-coaching.jpg" class="card-img-top" alt="Career Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Career Coaching</h5>
                            <p class="card-text">Receive personalized guidance to navigate your career path effectively.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/academic-coaching.jpg" class="card-img-top" alt="Academic Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Academic Coaching</h5>
                            <p class="card-text">Get support in your studies and achieve your academic goals with our coaches.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/life-coaching.jpg" class="card-img-top" alt="Life Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Life Coaching</h5>
                            <p class="card-text">Transform your life with our coaching services that empower personal growth.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/business-coaching.jpg" class="card-img-top" alt="Business Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Business Coaching</h5>
                            <p class="card-text">Develop your business skills and strategies with our expert coaching.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="path/to/fitness-coaching.jpg" class="card-img-top" alt="Fitness Coaching">
                        <div class="card-body">
                            <h5 class="card-title">Fitness Coaching</h5>
                            <p class="card-text">Achieve your fitness goals with personalized coaching and support.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <p>"The coaching I received helped me land my dream job! I can't thank the team enough!"</p>
                        <p class="text-end"><strong>- John Doe</strong></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <p>"I improved my language skills significantly in just a few weeks. Highly recommend!"</p>
                        <p class="text-end"><strong>- Jane Smith</strong></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <p>"The business coaching provided me with valuable insights that transformed my approach!"</p>
                        <p class="text-end"><strong>- Emily Johnson</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
