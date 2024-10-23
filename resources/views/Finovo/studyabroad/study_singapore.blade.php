@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
  <!-- Banner Section -->
  <header class="us-banner">
    <div class='overlay'></div>
        <div class="container">
            <h1>Study in the Singapore</h1>
            <p>Your journey to world-class education starts here!</p>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="contact-section my-3">
        <div class="container ">
            <div class='row'>
            <div class="contact-content col-md-7">
                <h2>Contact Us</h2>
                <p>If you have any questions or need guidance regarding studying in the USA, feel free to get in touch. We're here to help you through every step of the process!</p>
            </div>

            <!-- Contact Form -->
            <div class="contact-form col-md-5">
            @include('components.generalenquiry')
            </div>
</div>
            <!-- Contact Content -->
           
        </div>
    </section>


    <!-- Why Study in the Singapore Section -->
    <section class="section">
        <div class="container">
            <h2>Why Study in the Singapore?</h2>
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
@endsection
    <style>
      

        /* Banner Styles */
        .us-banner {
            position: relative; /* Position relative to contain absolute children */
    background-image: url('https://img.freepik.com/free-photo/merlion-statue-cityscape-singapore_335224-666.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        
        .us-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.us-banner h1, .us-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
}


        .us-banner h1 {
            font-size: 4em;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .us-banner p {
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
            color: #ff0024;
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
            color: #ff0024;
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
            .us-banner {
                padding: 80px 0;
            }

            .us-banner h1 {
                font-size: 3em;
            }

            .us-banner p {
                font-size: 1.4em;
            }
        }
    </style>


  

  
