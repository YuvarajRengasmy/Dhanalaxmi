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

        .about-banner {
            background-image: url('path/to/banner-image.jpg'); /* Background image for banner */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            color: white; /* Text color */
            padding: 100px 0; /* Padding for the banner */
            text-align: center; /* Center the text */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
        }

        .about-content {
            padding: 60px 0; /* Padding for content */
        }

        .about-content h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 20px; /* Space below headings */
            font-weight: bold; /* Bold headings */
            text-align: center; /* Center the headings */
        }

        .about-content p {
            color: #333; /* Dark text color */
            line-height: 1.6; /* Better readability */
            text-align: justify; /* Justified text */
        }

        .cta {
            background-color: #0FFCBE; /* Mint background for call to action */
            padding: 60px 0; /* Padding for CTA */
            color: #333; /* Dark text color */
            text-align: center; /* Center the text */
        }

        .cta h2 {
            margin-bottom: 20px; /* Space below CTA heading */
            font-weight: bold; /* Bold CTA heading */
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

        .img-fluid {
            border-radius: 10px; /* Rounded corners for images */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            transition: transform 0.3s ease; /* Smooth transform on hover */
        }

        .img-fluid:hover {
            transform: scale(1.05); /* Slightly enlarge image on hover */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .about-content img {
                margin-bottom: 20px; /* Space below images on small screens */
            }

            .about-content {
                padding: 30px 0; /* Reduced padding on small screens */
            }

            .about-banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
        }
    </style>
</head>
<body>

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
                    <img src="path/to/your-image1.jpg" class="img-fluid" alt="About Us Image">
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
                    <img src="path/to/your-image2.jpg" class="img-fluid" alt="Mission Image">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
