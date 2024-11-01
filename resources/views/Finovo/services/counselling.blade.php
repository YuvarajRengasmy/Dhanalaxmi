@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  <div class="inner-hero inner-hero-2" data-aos="fade-in" data-duration="0">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <div class="inner-hero-left">
            <p class="hero-title-txt">
                <strong>Navigate Your Path to Success with Dhanalaxmi<br/> Overseas Expertise in Abroad Studies</strong>
            </p>
            <div class="comm-para">
                <a  href="{{url('/contact')}}" id="openPopup" class="btn btn-primary" style="cursor:pointer;">Book Free Counseling</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="inner-hero-right text-center">
            <img src="https://www.edwiseinternational.com/img/aptitudetest-img.png" 
                 alt="Career Counseling" 
                 class="img-fluid" 
                 style="max-height: 100%; width: auto;">
        </div>
    </div>
</div>

      
    </div>
</div>
<div class="comm-section" data-aos="fade-in" data-duration="200">
    <div class="container">
        <h4 class="sec-title-2">Career Counseling</h4>
        <div class="comm-para">
            <p>Career counseling, also known as career guidance or career coaching, is a process that assists individuals in making informed decisions about their career development and future employment opportunities.</p>
        </div>
        <h4 class="sec-title-2" style="margin-top:40px">Academic Pathway Planning</h4>
        <div class="comm-para">
            <p>Academic Pathway Planning is a structured process that helps students map out their educational journey to achieve career goals. Our expert counselors for study abroad will then assist you in setting objectives, selecting courses, and creating a roadmap for success.</p>
        </div>
    </div>
</div>
<div class="comm-section " data-aos="fade-in" data-duration="200">
    <div class="trusted-sec-wrap">

        <div class="container  ">
            <div class='row'>
                <div class='col-md-6'>  <div class="trusted-left">
                    <div class="sec-title">How to Get<span class="highlighter rounded-3 text-white"> Started</span></div>
                    <div class="comm-para">
                        <p>To schedule your <strong>free consultation,</strong> simply fill out our inquiry form or contact us directly.  We recommend bringing your choice list and preferred course selections to your appointment.<br/> During your session, our seasoned professionals will conduct an in-depth <br/> discussion of your educational background, preferences, and budget to identify the best
                          <br/>opportunities across various institutions.
                          All of our counselors are professionally certified, and many have firsthand experience as international students. Your dedicated counselor will guide you through all details and procedures, ensuring you are well-prepared for your future educational endeavors.</p>
                    </div>
                </div>
            
            </div>
            <div class="col-md-6">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="sec-title">Our Comprehensive Support Includes</div>
        <div class="carousel-inner text-center">
            <!-- Carousel Items -->
            <div class="carousel-item active rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-3.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-3 text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h4 class="text-white display-5 fw-bold">Personalized Counseling</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;"> Enjoy unbiased, expert advice tailored to your individual needs.
                    .</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-5.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h4 class="display-5 fw-bold">University and Course Shortlisting</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Receive guidance on selecting potential schools and universities that align with your goals.</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-6.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h class="display-5 fw-bold">	Application Assistance</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Benefit from our support throughout the application process.
                    .</p>
                </div>
            </div>


            <div class="carousel-item active rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-8.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column justify-content-center align-items-center rounded-3 text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h4 class="text-white display-5 fw-bold">Statement of Purpose (SOP) Guidance</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;"> Get expert tips on crafting a compelling SOP.

                    .</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-1.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h4 class="display-5 fw-bold">	IELTS Preparation</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Access resources and advice to help you excel in the IELTS exam.
                    </p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-7.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h class="display-5 fw-bold">	Scholarship Guidance</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Discover available scholarships that can help fund your education.

                    .</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-6.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h class="display-5 fw-bold">Visa Application Support</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">: Navigate the visa process with ease, ensuring all necessary documentation is in order.
                    .</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-10.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h4 class="display-5 fw-bold">		Health Insurance and Accommodation Assistance</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Receive help in securing health insurance and suitable accommodation options.
                    .
                    </p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-2.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h class="display-5 fw-bold">	Ongoing Support</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">: Enjoy regular follow-ups and in-person support throughout your journey
                    .</p>
                </div>
            </div>
            <div class="carousel-item rounded-3" style="background-image: url('https://www.edwiseinternational.com/img/ap-t-img-4.jpg'); background-size: cover; background-position: center; height: 300px;">
                <div class="d-flex flex-column rounded-3 justify-content-center align-items-center text-center text-white" style="height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    <h class="display-5 fw-bold">	Pre-Departure Briefing</h4>
                    <p style="max-width: 600px; font-size: 1.2rem;">Once your visa is secured, we’ll prepare you for your new adventure with essential information.
                    .</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
       
    </div>
</div>

           


        </div>
    </div>
</div>
    <!-- Service Information Section -->
    <section class="info-section">
        <div class="container">
           
            <div class="row ">
                <div class="col-md-7">
                <h2 class="section-title">Why Choose Our Counselling Services?</h2> <!-- Update for each page -->
                    <div class="info-content mt-3">
                        <h3>Our Commitment to You</h3>
                        <p>Our support does not end once you receive your admission letter. We continue to assist you even after you arrive in your new country. Join us today—your journey towards global education starts here! .</p>
                    </div>
                    <div class="info-content mt-5">
                        <h3>Course Selection Assistance</h3>
                        <p>Struggling to choose the right path? Selecting a course involves careful consideration of personal goals, career aspirations, employability, deadlines, finances, and more. Visit us for expert advice to assess your strengths and choose the best course tailored for you
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
            <h2 class="section-title">What We Offer</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-landmark"></i>
                        <h5>Global University Guidance</h5>
                        <p>Our counselors provide you with global university insights to make informed decisions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-solid fa-handshake-angle"></i>
                        <h5>Admission Support</h5>
                        <p>Get help with your university applications and admissions processes worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-card">
                    <i class="fa-brands fa-cc-visa"></i>
                        <h5>Visa Assistance</h5>
                        <p>We simplify the visa process, ensuring you meet all requirements without stress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

  
    <style>

       
    </style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    AOS.init();
    const swiper = new Swiper('.aptTestSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.trusted-next',
            prevEl: '.trusted-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
</script>


  
 

   