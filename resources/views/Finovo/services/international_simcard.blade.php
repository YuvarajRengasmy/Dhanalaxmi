@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
  <!-- Header / Banner Section -->
  <div class="inner-hero inner-hero-2 bg-white mt-5" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt">Stay Connected Wherever You Go</h2>
          <p>Travel smart with affordable international SIM cards, specially designed for students studying abroad</p>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Get Your SIM Card Now</a>
          </div>
        </div>
        <div class="col-md-6 mb-4 inner-hero-right">
          <img src="https://5.imimg.com/data5/UM/IH/GLADMIN-47171644/international-sim-card-services-500x500.png" alt="Visa Assistance" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

    <!-- Service Information Section -->
    <section class="info-section ">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h2 class="section-title">Stay Connected While Studying Abroad</h2> <!-- Update for each page -->
                    <div class="info-content">
                        <h3>Studying Abroad</h3>
                        <p>When embarking on your educational journey abroad, securing an international SIM card can be a savvy strategy to minimize costs associated with roaming and international calls. Chances are, you'll want to keep your cell phone handy. Carrying it with you while studying or traveling can lead to substantial savings.</p>
                       
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
            <h2 class="section-title">Why Choose Our Service</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-card">
                         <i class="fa-brands fa-creative-commons-sampling"></i>
                        <h5>Pre-Activated SIMs</h5>
                        <p>Get your number before you travel and start using it immediately upon arrival</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                      <i class="fa-duotone fa-solid fa-rupee-sign"></i>
                        <h5>Pay in Rupees</h5>
                        <p>Save on forex conversion fees by paying in your local currency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-clock"></i>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock customer care for immediate assistance.</p>
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
    background-image: url('https://st2.depositphotos.com/1000128/6444/i/950/depositphotos_64444565-stock-photo-international-sim-cards-with-flags.jpg');
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


  
 

   