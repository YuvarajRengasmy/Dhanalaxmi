@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<div class="inner-hero inner-hero-2" data-aos="fade-in" data-duration="0">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <div class="inner-hero-left">
            <h4 class="text-primary"><strong>Fly Confidently to Your Study Destination</strong></h4>
            <p class="hero-title-txt">
                Experience hassle-free student flight bookings with exclusive <br/> discounts, flexible options, and comprehensive travel support.
                
            </p>
            <div class="comm-para">
                <a  href="{{url('/contact')}}" id="openPopup" class="btn btn-primary" style="cursor:pointer;">Start Your Journey Now</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="inner-hero-right text-center">
            <img src="https://media.istockphoto.com/id/486836087/photo/business-travel.jpg?s=612x612&w=0&k=20&c=B2jcARGGKEQBsc4sl9unuKd9FlkjUkl3jD6MsXYH5Ac=" 
                 alt="Career Counseling" 
                 class="img-fluid" 
                 style="max-height: 100%; width: auto;">
        </div>
    </div>
</div>

<div class="comm-section mt-5" data-aos="fade-in" data-duration="200">
    <div class="container">
        <h4 class="sec-title-2">Flight_Bookings</h4>
        <div class="comm-para">
            <p>Booking your flight is a critical first step in your journey to study abroad. At Dhanalaxmi Overseas, we simplify the entire process, ensuring that students like you secure affordable and flexible travel arrangements. With access to exclusive student fares, we make it easy for you to navigate travel dates, connecting flights, and any necessary documentation</p>
        </div>
       
    </div>
</div>


    <!-- Service Information Section -->
    <section class="info-section">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h2 class="section-title">Why Book with Us?</h2> <!-- Update for each page -->
                    <div class="info-content mt-3">
                        <h4><strong><i class="fa-solid fa-percent text-danger"></i> Student Discounts</strong> </h4>
                        <p>Special fares for students on international flights</p>
                    </div>
                    <div class="info-content mt-3">
                        <h5><strong><i class="fa-solid fa-book text-danger"></i> Flexible Booking</strong> </h5>
                        <p>Adjust your travel dates as needed with our flexible options</p>
                    </div>
                    <div class="info-content mt-3">
                        <h5><strong><i class="fa-solid fa-business-time text-danger"></i> 24/7 Travel Support</strong> </h5>
                        <p>Get assistance with check-in, baggage, and more.</p>
                    </div>
                </div>

             
          
                <div class="col-md-5">
                <h2 class="section-title">Get In Touch</h2>
                    <div class="contact-form">
                      @include('components.generalenquiry')
                    </div>
                </div>
            </div>
        </div>
       
            
           
       
    </section>

    <!-- Icon / What We Offer Section -->
    <section class="icon-section">
        <div class="container">
            <h2 class="section-title">Our Flight Booking Services</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-bag-shopping"></i>
                        <h5>Extra Baggage Allowance</h5>
                        <p>Special baggage allowance for international students</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-plane"></i>
                        <h5>Flexible Changes</h5>
                        <p>Change your travel dates with minimal fees</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-circle-xmark"></i>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock assistance for all your travel needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <!-- Custom CSS -->
    <style>
      
        /* Header / Banner Section */
        .counselling-banner {
            position: relative; /* Position relative to contain absolute children */
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230705/pngtree-d-illustration-of-a-smartphone-application-for-booking-flights-buying-tickets-image_3813405.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
          
          
        }
        .counselling-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.counselling-banner h1, .counselling-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
}

        .counselling-banner h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        .counselling-banner p {
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
            color: #ff0042;
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
            .counselling-banner h1 {
                font-size: 2.5rem;
            }

            .info-section {
                padding: 30px 0;
            }
        }
    </style>


  
 

   