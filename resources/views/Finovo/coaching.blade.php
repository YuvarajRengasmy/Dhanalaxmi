
@extends('layouts.main')

@section('meta_title', 'Coaching | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

   <!-- Banner Section -->
   <header class="coaching-banner">
   <div class="overlay"></div>
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
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Language Coaching">
                        <div class="card-body">
                            <h5 class="card-title">IELTS Coaching</h5>
                            <p class="card-text">Enhance your communication skills in a new language with our expert coaches.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Career Coaching">
                        <div class="card-body">
                            <h5 class="card-title">PTE Coaching</h5>
                            <p class="card-text">Receive personalized guidance to navigate your career path effectively.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Academic Coaching">
                        <div class="card-body">
                            <h5 class="card-title">TOEFL</h5>
                            <p class="card-text">Get support in your studies and achieve your academic goals with our coaches.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Life Coaching">
                        <div class="card-body">
                            <h5 class="card-title">GMAT (Graduate Management Test)</h5>
                            <p class="card-text">Transform your life with our coaching services that empower personal growth.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Business Coaching">
                        <div class="card-body">
                            <h5 class="card-title">SAT (Scholastic Aptitude Test)</h5>
                            <p class="card-text">Develop your business skills and strategies with our expert coaching.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card coaching-card">
                        <img src="{{ URL('images/design/new1/admission1.jpg') }}" class="card-img-top rounded-top" style='height:15rem;' alt="Fitness Coaching">
                        <div class="card-body">
                            <h5 class="card-title">GRE (Graduate Record Examination)</h5>
                            <p class="card-text">Achieve your fitness goals with personalized coaching and support.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection
   
   <style>
        
        .coaching-banner {
            position: relative; /* Position relative to contain absolute children */
    background-image: url('https://png.pngtree.com/background/20210711/original/pngtree-classical-class-reunion-board-picture-image_1120493.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.coaching-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.coaching-banner h1, .coaching-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
}

        .coaching-banner h1 {
            font-size: 3em; /* Font size for the main heading */
        }

        .coaching-banner p {
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

       

       

        /* Responsive styles */
        @media (max-width: 768px) {
            .coaching-banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
            .coaching-banner h1 {
                font-size: 2.5em; /* Reduced font size for heading on small screens */
            }
            .coaching-banner p {
                font-size: 1.2em; /* Reduced font size for subheading on small screens */
            }
        }
    </style>





 

   


   
   