<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - Counselling</title> <!-- Update for each page -->
    
    <!-- Bootstrap and Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
        }

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
</head>
<body>

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
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone">Your Phone Number</label>
                                    <input type="text" class="form-control" id="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="visa">Select Visa Type</label>
                                    <select id="visa" class="form-control">
                                        <option value="">Select Visa</option>
                                        <option value="student">Student Visa</option>
                                        <option value="tourist">Tourist Visa</option>
                                        <option value="work">Work Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-custom">Send Message</button>
                        </form>
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

 

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
