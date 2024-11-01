@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
  <!-- Header / Banner Section -->
  <div class="inner-hero inner-hero-2" data-aos="fade-in" data-duration="0">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <div class="inner-hero-left">
            <h2 class="text-primary"><strong>Effortless Global Spending with Student Forex Cards!</strong></h2>
            <p class="fs-5">
            Secure, flexible, and globally accepted your go-to travel card for study <br/> abroad expenses. There are no hidden fees, just smart spending

                
            </p>
            <div class="comm-para">
                <a  href="{{url('/contact')}}" id="openPopup" class="btn btn-primary" style="cursor:pointer;">Get Your Forex Card Today</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="inner-hero-right text-center">
            <img src="https://thumbs.dreamstime.com/b/forex-trading-currency-exchange-rate-internet-investment-business-concept-143701056.jpg" 
                 alt="Career Counseling" 
                 class="img-fluid" 
                 style="max-height: 100%; width: auto;">
        </div>
    </div>
</div>
<div class="comm-section" data-aos="fade-in" data-duration="200">
    <div class="container">
        <h4 class="sec-title-2">Forex Cards Made for Students Abroad</h4>
        <div class="comm-para">
            <p >Traveling for your studies? A Forex card is a must-have! Designed specifically for students studying abroad, our Forex cards allow secure, seamless payments without the unpredictability of currency fluctuations. Unlike regular debit or credit cards, our Forex cards let you lock in favorable exchange rates, saving you money on every transaction</p>
        </div>
       
    </div>
</div>
    <!-- Service Information Section -->
    <section class="info-section">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h4 class="section-title">Why Choose a Forex Card for International Travel?</h4> <!-- Update for each page -->
                    <div class="info-content">
                        <h5><strong><i class="fa-brands fa-stack-exchange text-danger fs-5"></i> Competitive Exchange Rates</strong> </h5>
                        <p>Lock in the best rates and avoid currency value fluctuations.</p>                     
                    </div>
                    <div class="info-content">
                        <h5><strong> <i class="fa-solid fa-cloud text-danger fs-5"></i> Global Acceptance</strong> </h5>
                        <p>Use it for purchases and ATM withdrawals worldwide.</p>                     
                    </div>
                    <div class="info-content">
                        <h5><strong> <i class="fa-solid fa-wallet text-danger fs-5"></i> Secure Payments</strong> </h5>
                        <p>	PIN-protected and reloadable, ensuring your funds stay safe.</p>                     
                    </div>
                    <div class="info-content">
                        <h5><strong> <i class="fa-solid fa-eye-slash text-danger fs-5"></i> No Hidden Fees</strong> </h5>
                        <p>		Transparent charges with affordable conversion fees.</p>                     
                    </div>
                    <div class="info-content">
                        <h5><strong><i class="fa-solid fa-gauge text-danger fs-5"></i> 24/7 Support</strong> </h5>
                        <p>Our team is here to help anytime, anywhere.
                        </p>                     
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
            <h2 class="section-title">Easy Forex Card Setup in Just a Few Steps</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="icon-card">
                    <i class="fa-brands fa-apple"></i>
                        <h5>Step-1</h5>
                        <p>Fill in a simple online application.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card">
                    <i class="fa-solid fa-arrow-up-wide-short"></i>
                        <h5>Step-2</h5>
                        <p>Select your preferred currency and load the amount.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card">
                    <i class="fa-solid fa-truck"></i>
                        <h5>Step-3</h5>
                        <p>Collect your card from us or opt for delivery.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-card">
                    <i class="fa-solid fa-feather"></i>
                        <h5>Step-4</h5>
                        <p>Start spending worldwide with ease.</p>
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
    background-image: url('https://cdn.unicreds.com/blog/wp-content/uploads/2021/09/11182808/Untitled-design-41.png');
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


  
 

   