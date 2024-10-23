@extends('layouts.main')

@section('meta_title', 'Certifications | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

  <!-- Banner Section -->
  <header class="certification-banner">
  <div class="overlay"></div>
        <div class="container">
            <h1>Certification Programs</h1>
            <p>Boost Your Skills and Career Opportunities</p>
        </div>
    </header>

    <!-- Certification Programs Section -->
    <section class="certification-section">
        <div class="container">
            <h2>Our Certifications</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-1.jpg" class="card-img-top" alt="Certification in Project Management">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Project Management</h5>
                            <p class="card-text">Gain essential project management skills and knowledge to lead projects successfully.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-2.jpg" class="card-img-top" alt="Certification in Digital Marketing">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Digital Marketing</h5>
                            <p class="card-text">Master digital marketing strategies and tools to enhance your business presence online.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-3.jpg" class="card-img-top" alt="Certification in Data Science">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Data Science</h5>
                            <p class="card-text">Learn data analysis, visualization, and machine learning techniques to advance your career.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-4.jpg" class="card-img-top" alt="Certification in Graphic Design">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Graphic Design</h5>
                            <p class="card-text">Unlock your creativity with our comprehensive graphic design certification.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-5.jpg" class="card-img-top" alt="Certification in Cybersecurity">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Cybersecurity</h5>
                            <p class="card-text">Protect systems and networks with our in-depth cybersecurity certification.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card certification-card">
                        <img src="path/to/certification-6.jpg" class="card-img-top" alt="Certification in Software Development">
                        <div class="card-body">
                            <h5 class="card-title">Certification in Software Development</h5>
                            <p class="card-text">Get hands-on experience in software development and enhance your coding skills.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

    <style>
       
       .certification-banner {
    position: relative; /* Make this position relative to contain the overlay */
    background-image: url('https://img.freepik.com/premium-photo/quality-assurance-standard-certification-certified-internet-business-services_34141-1047.jpg'); /* Background image for banner */
    background-size: cover; /* Cover the entire area */
    background-position: center; /* Center the image */
    color: white; /* Text color */
    padding: 100px 0; /* Padding for the banner */
    text-align: center; /* Center the text */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
}

.certification-banner .overlay {
    position: absolute; /* Position overlay absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    right: 0; /* Align to the right */
    bottom: 0; /* Align to the bottom */
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode for the overlay */
    z-index: 1; /* Position overlay above the background */
}

.certification-banner h1, .certification-banner p {
    position: relative; /* Position text above the overlay */
    z-index: 2; /* Position text above the overlay */
}

        .certification-banner h1 {
            font-size: 3em; /* Font size for the main heading */
        }

        .certification-banner p {
            font-size: 1.5em; /* Font size for the subheading */
        }

        .certification-section {
            padding: 60px 0; /* Padding for content */
        }

        .certification-card {
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        .certification-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .certification-card img {
            border-radius: 10px 10px 0 0; /* Rounded corners for image */
        }

        .certification-section h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
            font-weight: bold; /* Bold headings */
        }

        .certification-section p {
            color: #333; /* Dark text color */
            line-height: 1.6; /* Better readability */
            text-align: justify; /* Justified text */
        }

        

        /* Responsive styles */
        @media (max-width: 768px) {
            .certification-banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
            .certification-banner h1 {
                font-size: 2.5em; /* Reduced font size for heading on small screens */
            }
            .certification-banner p {
                font-size: 1.2em; /* Reduced font size for subheading on small screens */
            }
        }
    </style>






  
    



    
  
