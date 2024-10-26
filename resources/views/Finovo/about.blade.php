@extends('layouts.main')

@section('meta_title', 'About | Your Trusted Partner in International Education')

@section('meta_description', 'At Dhanalaxmi Overseas, we transform international education dreams into reality through expert guidance and comprehensive support.')

@section('styles')
    <style>
        .client-logo {
            transition: transform 0.3s;
        }

        .client-logo:hover {
            transform: scale(1.05);
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
@endsection

@section('content')
<div class="about-banner">
    <div class="row">
        <div class="col-lg-10">
            <h2>Your Trusted Partner in <br/>International Education</h2>
            <p class="fs-5">At Dhanalaxmi Overseas, we transform international education dreams into reality through expert guidance and comprehensive support.</p>
            <button class="btn btn-primary">Contact Us</button>
        </div>
    </div>
</div>

<!-- Client Logos Section -->
<section>
    <div class="container mt-5" data-aos="fade-up">
        <div class="row gy-4">
            <!-- Client Item 1 -->
            <div class="col-xl-3 col-md-4 col-6 client-logo text-center">
            <i class="fas text-danger fa-2x mb-3">25+</i>
<h5>Global Offices</h5>

            </div>
            <!-- Client Item 2 -->
            <div class="col-xl-3 col-md-4 col-6 client-logo text-center">
                <i class="fas text-danger fa-2x mb-3">10000 +</i>
                <h5>Successful Students</h5>
            </div>
            <!-- Client Item 3 -->
            <div class="col-xl-3 col-md-4 col-6 client-logo text-center">
                <i class="fas  text-danger fa-2x mb-3">500 +</i>
                <h4>University Partners</h4>
            </div>
            <!-- Client Item 4 -->
            <div class="col-xl-3 col-md-4 col-6 client-logo text-center">
                <i class="fas text-danger fa-2x mb-3">98 % </i>
                <h5>Visa Success Rate
                </h5>
            </div>
           
        </div>
    </div>
</section>

<!-- About Content Section -->
<section class="about-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('storage/' . $aboutData['image_one']) }}" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-6 mb-4">
                <h2>{{ $aboutData['title_one'] }}</h2>
                <p>{!! $aboutData['description_one'] !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>{{ $aboutData['title_two'] }}</h2>
                <p>{!! $aboutData['description_two'] !!}</p>
            </div>
            <div class="col-md-6 mb-4">
                <img src="{{ asset('storage/' . $aboutData['image_two']) }}" class="img-fluid" alt="Mission Image">
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-4">
                <img src="{{ asset('storage/' . $aboutData['image_three']) }}" class="img-fluid" alt="Mission Image">
            </div>
            <div class="col-md-6 mb-4 ">
                <h2>{{ $aboutData['title_three'] }}</h2>
                <p>{!! $aboutData['description_three'] !!}</p>
            </div>
        </div>
  
    <div class="row">
        <div class="col-md-6 mb-4">
        <h3 class="text-start">{{ $aboutData['title_three'] }}</h3>
        <p>{!! $aboutData['description_three'] !!}</p>
            </div>
            <div class="col-md-6 mb-4 ">
                <h3>{{ $aboutData['title_three'] }}</h3>
                <p>{!! $aboutData['description_three'] !!}</p>
            </div>
        </div>
       
         
           
     
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta">
    <div class="container">
        <h2>Ready to Start Your Journey?</h2>
        <p>Contact us today to learn more about your study abroad options!</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for Description fields (if needed)
    CKEDITOR.replace('description_one', {
        height: 200,
        readOnly: true
    });
    CKEDITOR.replace('description_two', {
        height: 200,
        readOnly: true
    });
    CKEDITOR.replace('description_three', {
        height: 200,
        readOnly: true
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init();
</script>
@endsection
