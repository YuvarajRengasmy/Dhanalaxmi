<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Study in the USA</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Banner Styles */
        .banner {
            background-image: url('path/to/usa-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .banner h1 {
            font-size: 4em;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .banner p {
            font-size: 1.8em;
        }

        /* Section Styles */
        .section {
            padding: 60px 0;
            background-color: white;
            margin-bottom: 40px;
        }

        .section h2 {
            color: #106EBE;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
        }

        .section p,
        .section ul {
            font-size: 1.1em;
            line-height: 1.7;
            margin-bottom: 20px;
            color: #555;
        }

        .section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .section ul li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
        }

        .section ul li::before {
            content: '\f058';
            font-family: 'FontAwesome';
            position: absolute;
            left: 0;
            top: 0;
            color: #0FFCBE;
            font-size: 1.2em;
        }

        /* Contact Form */
        .contact-form {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 700px;
        }

        .contact-form label {
            font-weight: 600;
        }

        .contact-form .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            background-color: #106EBE;
            border: none;
            padding: 10px 25px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0D9F98;
        }

        /* Icon Styling for Sections */
        .icon-box {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background-color: #f1f1f1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .icon-box i {
            font-size: 3em;
            color: #106EBE;
            margin-bottom: 15px;
        }

        .icon-box h4 {
            font-size: 1.3em;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .icon-box p {
            color: #555;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .banner {
                padding: 80px 0;
            }

            .banner h1 {
                font-size: 3em;
            }

            .banner p {
                font-size: 1.4em;
            }
        }
    </style>
</head>

<body>

    <!-- Banner Section -->
      <header class="banner">
        <div class="container">
            <h1>Study in the USA</h1>
            <p>Your journey to world-class education starts here!</p>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Contact Content -->
            <div class="contact-content">
                <h2>Contact Us</h2>
                <p>If you have any questions or need guidance regarding studying in the USA, feel free to get in touch. We're here to help you through every step of the process!</p>
            </div>

            <!-- Contact Form -->
            <div class="contact-form col-md-5">
                <form >
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="visa" class="form-label">Select Visa Type</label>
                        <select class="form-control" id="visa" required>
                            <option value="" disabled selected>Select Visa Type</option>
                            <option value="student">Student Visa</option>
                            <option value="tourist">Tourist Visa</option>
                            <option value="work">Work Visa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>


    <!-- Why Study in the USA Section -->
    <section class="section">
        <div class="container">
            <h2>Why Study in the USA?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-university"></i>
                        <h4>Prestigious Universities</h4>
                        <p>Top-ranked universities offering diverse programs and research opportunities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-globe-americas"></i>
                        <h4>Cultural Experience</h4>
                        <p>Experience a rich cultural landscape with students from all around the world.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                        <h4>Career Opportunities</h4>
                        <p>Network and explore career opportunities in a global environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education in the USA Section -->
    <section class="section">
        <div class="container">
            <h2>Education in the USA</h2>
            <p>The US education system offers a diverse range of learning environments, allowing students to select institutions based on their academic and personal preferences. Universities emphasize critical thinking, creativity, and research, giving students the tools to succeed globally.</p>
        </div>
    </section>

    <!-- What Do We Offer Section -->
    <section class="section">
        <div class="container">
            <h2>What Do We Offer?</h2>
            <ul>
                <li>Personalized consultation to understand your educational goals</li>
                <li>Assistance with university applications and admissions</li>
                <li>Guidance on visa processes and requirements</li>
                <li>Pre-departure orientations and post-arrival support</li>
                <li>Information on scholarships and financial aid</li>
            </ul>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
