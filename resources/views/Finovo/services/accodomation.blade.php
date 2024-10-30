@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
  <!-- Header / Banner Section -->
  <div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt">Finding Your Home Away From Home International Accommodation Made Easy
          </h2>
          <p>Find your ideal international accommodation for study abroad</p>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Get Accommodation Assistance</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://media.istockphoto.com/id/187363337/photo/modern-hotel-building-in-summer.jpg?s=612x612&w=0&k=20&c=eRVDcadZTKs5t2K-CEeXT6DiJQ68Fnbs6u9F-0S_v8Q=" alt="Visa Assistance" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

    <!-- Service Information Section -->
    <section class="info-section">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h2 class="section-title">Types of Accommodation</h2> <!-- Update for each page -->
                    <div class="info-content mt-2">
                        <h4 class="text-warning"><i class="fa-solid fa-ghost text-primary"></i> University Halls of Residence</h4>
                        <p>Perfect for first-year students, these accommodations typically include all utilities, Wi-Fi, and shared kitchen and living areas. Offered directly through UK institutions, these are secure, student-focused spaces.</p>
                        <h4 class="text-warning"><i class="fa-solid fa-lock text-primary"></i> Private Halls of Residence</h4>
                        <p>Private halls offer a similar setup to university-owned halls, with added amenities. These are typically more independent and may be priced higher.
                        </p>
                        <h4 class="text-warning"><i class="fa-solid fa-key text-primary"></i> Private Rentals </h4>
                        <p>For students looking beyond first-year halls, renting privately provides independence. Bear in mind, all bills and upkeep fall under your responsibility.
                        </p>
                        <h4 class="text-warning"><i class="fa-sharp fa-solid fa-house-user text-primary"></i> Make Yourself at Home</h4>
                        <p>We aim to create a welcoming, relaxed environment to make your stay comfortable. Whether it’s studying, socializing, or exploring nearby cafes, we support your unique journey..</p>
                    <h5 class="text-bold text-warning"><i class="fas fa-info-circle text-primary"></i> Self-Catering & House Shares</h5>
                <p> For a more independent experience, we offer self-catering accommodations in shared homes or rooms within family households. Not sure what to choose? Let us guide you through the options.</p>  
               
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
            <h2 class="section-title">Accommodation Tips for International Students</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-duotone fa-solid fa-house"></i>
                        <h5  class="text-bold text-primary">How to Choose the Right Accommodation</h5>
                        <p>Consider factors such as proximity to your university, amenities, and budget. Our experts provide tailored advice based on your unique circumstances.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-handshake"></i>
                        <h5  class="text-bold text-primary">	Understanding Lease Agreements</h5>
                        <p>We help you navigate lease agreements and clarify any doubts, ensuring you understand your rights and responsibilities as a tenant.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-mortar-pestle"></i>
                        <h5 class="text-bold text-primary">	Cultural Considerations</h5>
                        <p>We provide insights into local customs and housing norms, helping you adjust to your new living environment</p>
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
    background-image: url('https://img.freepik.com/premium-vector/cartoon-depiction-contemporary-hotel-bedroom-interior-illuminated-by-nighttime-city-lights_1263357-10258.jpg?semt=ais_hybrid');
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


  
 

   