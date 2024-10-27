@extends('layouts.main')

@section('meta_title', 'Home | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

<!-- 
<header class="header bg-dark text-white pb-5 pt-3 m-0 d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info">
            <span class="me-3">Email: info@dhanalaxmifinovo.com</span>
           
        </div>
        
          
            <button class="btn btn-outline-light me-3" >Talk with Our Experts</button>
           
      
<button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#exampleModal">
 Enquiry Now
</button>





                                                        </div>
   
    
</header> -->


    <!-- Hero Section -->
    <section id="home" class="hero">
    <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Carousel Items -->
        <div class="carousel-inner">
            <!-- Slide 1: Study in the UK -->
            <div class="carousel-item active">
                <div class="hero-overlay"></div>
                <img src="{{url('images/design/orginal_visa.jpg')}}" class="d-block w-100 hero-img" alt="Study in the UK">
                <div class="carousel-caption">
                    <h1>Study in the UK</h1>
                    <p>Pursue your higher education in the world's most renowned universities. Unlock endless opportunities.</p>
                    <a href="#contact" class="btn btn-outline-light">Learn More</a>
                </div>
            </div>

            <!-- Slide 2: Study in Canada -->
            <div class="carousel-item">
                <div class="hero-overlay"></div>
                <img src="https://wallpaperset.com/w/full/d/b/d/172313.jpg" class="d-block w-100 hero-img" alt="Study in Canada">
                <div class="carousel-caption">
                    <h1>Study in Canada</h1>
                    <p>Experience top-quality education and embrace cultural diversity.</p>
                    <a href="#contact" class="btn btn-outline-light">Get Started</a>
                </div>
            </div>

            <!-- Slide 3: Study in Australia -->
            <div class="carousel-item">
                <div class="hero-overlay"></div>
                <img src="https://wallpaperset.com/w/full/d/b/d/172313.jpg" class="d-block w-100 hero-img" alt="Study in Australia">
                <div class="carousel-caption">
                    <h1>Study in Australia</h1>
                    <p>Take advantage of world-class education and high quality of life.</p>
                    <a href="#contact" class="btn btn-outline-light">Explore Now</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>







    <!-- About Us Section -->
    <section id="about" class="about bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://media.istockphoto.com/id/1433359384/photo/contact-us-or-customer-support-hotline-people-connect-close-up-businessman-holding-tablet.jpg?s=612x612&w=0&k=20&c=OAKK4dx09tfmP3u8Nbnb2vKNKXEThvfRxhdQy-VBXpM=" alt="About Us Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="text-center mb-4">About Us</h2>
                <p>At Dhanalaxmi Overseas, we are committed to providing top-notch overseas education services that guide students in achieving their academic goals. With a team of expert consultants and over a decade of experience, we have successfully helped students gain admissions to prestigious universities across the globe.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3"><i class="fas fa-graduation-cap mr-2"></i>Expert guidance on university applications</li>
                    <li class="mb-3"><i class="fas fa-passport mr-2"></i>Comprehensive visa assistance for a smooth journey</li>
                    <li class="mb-3"><i class="fas fa-home mr-2"></i>Accommodation support tailored to your needs</li>
                    <li class="mb-3"><i class="fas fa-plane-departure mr-2"></i>Travel and pre-departure advice for students</li>
                </ul>
            </div>
        </div>
        <!-- Additional Dummy Content -->
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <i class="fas fa-globe fa-3x mb-3"></i>
                <h4>Global Reach</h4>
                <p>We have partnered with over 200 universities in more than 10 countries, offering a wide range of study destinations.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-user-friends fa-3x mb-3"></i>
                <h4>Personalized Support</h4>
                <p>Our team of dedicated consultants work closely with each student, offering personalized solutions for their academic journey.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-certificate fa-3x mb-3"></i>
                <h4>Proven Success</h4>
                <p>With hundreds of success stories, we take pride in helping students secure admissions and scholarships at their dream universities.</p>
            </div>
        </div>
    </div>
</section>






    <!-- Services Section -->

    <section id="services" class="services py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="service-box  p-4 border rounded shadow"> 
                    <i class="fas fa-graduation-cap fa-3x mb-3 text-primary"></i>
                    <h4>Admission Guidance</h4>
                    <p>Our experts work with you to identify your academic goals and guide you in securing admission to top universities across the globe. We assist in choosing the right program that fits your career aspirations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-passport fa-3x mb-3 text-success"></i>
                    <h4>Visa Assistance</h4>
                    <p>We simplify the complex visa process by providing step-by-step guidance. From document preparation to interviews, we ensure you have everything in place for a smooth visa approval experience.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-home fa-3x mb-3 text-info"></i>
                    <h4>Accommodation Support</h4>
                    <p>Finding accommodation abroad can be challenging. We help you secure safe, affordable, and convenient housing options close to your university, ensuring a comfortable stay during your studies.</p>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-plane-departure fa-3x mb-3 text-danger"></i>
                    <h4>Travel & Forex Assistance</h4>
                    <p>We assist with travel arrangements, including flight bookings and travel insurance. Additionally, we provide foreign exchange services, helping you manage your finances abroad with ease.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-hand-holding-usd fa-3x mb-3 text-warning"></i>
                    <h4>Financial Assistance</h4>
                    <p>We offer guidance on scholarships, student loans, and financial planning to help ease the financial burden of studying abroad. Let us help you explore funding opportunities to make your dreams a reality.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border rounded shadow">
                    <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-secondary"></i>
                    <h4>Test Preparation</h4>
                    <p>We offer comprehensive test preparation services for exams like IELTS, TOEFL, and GMAT. Our experienced instructors ensure you achieve your desired scores to enhance your university applications.</p>
                </div>
            </div>
        </div>
    </div>
   
</section>



<section id="study-abroad" class="study-abroad py-5">
    <div class="container">
        <h2 class="text-center mb-4">Study Abroad</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="https://4kwallpapers.com/images/wallpapers/london-bridge-united-kingdom-river-thames-night-time-3440x1440-3316.jpg" class="card-img-top" alt="Study in UK">
                    <div class="card-body">
                        <h5 class="card-title">Study in UK</h5>
                        <p class="card-text">Experience world-class education in the UK. Discover diverse cultures and innovative teaching methods.</p>
                        <a href="{{ url('/study_in_uk') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="https://www.iliketowastemytime.com/sites/default/files/imagecache/blog_image/new-york-manhattan-hd-wallpaper-by-stig-ottesen-iltwmt.jpg" class="card-img-top" alt="Study in USA">
                    <div class="card-body">
                        <h5 class="card-title">Study in USA</h5>
                        <p class="card-text">Join leading universities in the USA, known for their academic excellence and vibrant campus life.</p>
                        <a href="{{ url('/study_in_us') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card study-card">
                    <img src="https://img.freepik.com/premium-photo/bangkok-thailand-september-20-2021-australia-flag-world-map-background-flag-world-map-background_39768-4388.jpg" class="card-img-top" alt="Study in Australia">
                    <div class="card-body">
                        <h5 class="card-title">Study in Australia</h5>
                        <p class="card-text">Explore stunning landscapes while receiving a high-quality education in Australia’s top institutions.</p>
                        <a href="{{ url('/study_in_australia') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class='text-center mt-4 mb-1'>
    <a href="{{ url('/studyabroad') }}" class="btn btn-primary">View More</a>
    </div>
    
</section>




  

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">What Our Students Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="{{ URL('images/design/testimonial/testi1.jpg') }}" alt="Student 1" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"The best education consultancy I've ever worked with!"</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 1</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="{{ URL('images/design/testimonial/testi2.jpg') }}" alt="Student 2" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"They made my visa process so easy. Highly recommended."</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 2</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card text-center p-4 border rounded shadow">
                    <img src="{{ URL('images/design/testimonial/testi1.jpg') }}" alt="Student 3" class="rounded-circle mb-3">
                    <blockquote class="blockquote">
                        <p>"Thanks to their team, I got into my dream university!"</p>
                    </blockquote>
                    <footer class="blockquote-footer">
                        <cite title="Source Title">Student 3</cite>
                        <div class="star-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="fas fa-star text-muted"></i>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Contact Section -->
    <section id="contact" class="contact py-3">
    <div class="container">
        <h2 class="text-center mb-3">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
            @include('components.generalenquiry')
            </div>
            <div class="col-md-6 mt-3 mx-auto">
                <div class="visa-assessment p-4 border rounded shadow bg-light">
                    <h3 class="text-center mb-3">Free Online Visa Assessment</h3>
                    <p>Not sure about the visa options available for you? Fill out our quick assessment form and get personalized guidance from our experts.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Quick assessment process
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Tailored recommendations
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success"></i> 
                            Expert support and advice
                        </li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary btn-block " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Start Assessment
</button>
                  
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded m-3">
            <div class="card w-100 border-0 shadow" style="height: 500px;">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <p class="modal-title fs-4 fw-bolder text-dark mb-3" id="exampleModalToggleLabel">Enquiry</p>
                    <button type="button" class="btn-close bg-dark border rounded-5 m-0 mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        
                @include('components.enquiry-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
   













   

