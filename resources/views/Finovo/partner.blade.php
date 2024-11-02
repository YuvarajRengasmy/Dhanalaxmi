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
                <strong>{{ $universityforms->name }}</strong>
            </p>
            <div class="comm-para">
                <a  href="{{url('/contact')}}" id="openPopup" class="btn btn-primary" style="cursor:pointer;">Book Free Counseling</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="inner-hero-right text-center">
            <img src="{{ asset('storage/' . $universityforms->image) }}" 
                 alt="Career Counseling" 
                 class="img-fluid" 
                 style="max-height: 100%; width: auto;">
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
                <h2 class="section-title">Why Choose Our University Services?</h2> <!-- Update for each page -->
                    <div class=" mt-3">
                        
                        <p>{!! $universityforms->content !!}.</p>
                    </div>
                   
                </div>

             
          
                <div class="col-md-5">
                <h2 class="section-title">Get In Partner Us</h2>
                    <div class="contact-form">
                      @include('components.agent-form')
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


  
 

   