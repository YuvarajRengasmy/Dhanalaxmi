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

        .banner {
            background-image: url('path/to/usa-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .banner h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 1.5em;
        }

        .section {
            padding: 60px 0;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .section h2 {
            color: #106EBE;
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 0;
            background-color: #f4f4f9;
        }

        .contact-content {
            flex-basis: 50%;
            padding-right: 20px;
        }

        .contact-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

        @media (max-width: 768px) {
            .banner {
                padding: 60px 0;
            }
            .banner h1 {
                font-size: 2.5em;
            }
            .banner p {
                font-size: 1.2em;
            }
            .contact-section {
                flex-direction: column;
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
            <div class="contact-form">
                <form>
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
            <p>The United States is home to some of the world's most prestigious universities and colleges. Students have access to diverse academic programs, cutting-edge research facilities, and experienced faculty members. Studying in the USA also provides opportunities to experience a rich cultural tapestry, vibrant student life, and professional networking.</p>
        </div>
    </section>

    <!-- Education in the USA Section -->
    <section class="section">
        <div class="container">
            <h2>Education in the USA</h2>
            <p>The education system in the USA is diverse and offers a variety of learning environments. From large research universities to smaller liberal arts colleges, students can choose an institution that fits their academic and personal needs. Programs typically emphasize critical thinking, creativity, and practical application.</p>
        </div>
    </section>

    <!-- What Do We Offer Section -->
    <section class="section">
        <div class="container">
            <h2>What Do We Offer?</h2>
            <p>We provide comprehensive services to help you navigate the study abroad experience. Our offerings include:</p>
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
