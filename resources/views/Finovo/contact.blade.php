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

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Get in Touch</h2>
            <p>If you have any questions, feel free to reach out to us. We will get back to you as soon as possible!</p>
            
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
