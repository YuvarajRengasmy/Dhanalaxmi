@extends('layouts.adminlayout')

@section('meta_title', 'About | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('admincontent')
@if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show custom-alert" role="alert">
        {{ session('success') }}
    </div>
@endif

<style>
    /* CSS to position the alert at the top-right corner */
    .custom-alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050; /* Ensures the alert appears on top */
        width: auto;
        max-width: 300px; /* Adjust width as needed */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow effect */
    }
    .about-banner {
    position: relative; /* Position relative to contain absolute children */
    background-image: url('https://static.vecteezy.com/system/resources/thumbnails/007/067/602/small_2x/businessman-shows-outstretched-hand-with-social-icon-on-virtual-screen-contact-us-free-photo.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.about-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.about-banner h1, .about-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
}
</style>

<script>
    // JavaScript to auto-close the alert after 5 seconds
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(() => {
            const alert = document.querySelector('.custom-alert');
            if (alert) {
                alert.classList.remove('show'); // Hides the alert
                alert.addEventListener('transitionend', () => alert.remove()); // Removes from DOM after transition
            }
        }, 5000); // 5000 ms = 5 seconds
    });
</script>

<header class="about-banner">
<div class="overlay"></div>
    <div class="container">
        <h1>About Us</h1>
        <p>Your gateway to a world of educational opportunities.</p>
    </div>
</header>

<!-- Content Section -->

@forelse ($abouts as $about)
<div class="card-header-actions d-flex justify-content-end mt-3">
            <a class="btn btn-primary  text-white btn-sm" href="{{ route('abouts.create') }}">
                <i class="fa fa-plus"></i> Add About
            </a>
            <form action="{{ route('abouts.destroy', $about->id) }}" method="POST">
           
           <a class="btn btn-success btn-sm" href="{{ route('abouts.edit', $about->id) }}">
               <i class="fa fa-pen"></i> 
           </a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
               <i class="fa fa-trash"></i> 
           </button>
       </form>
        </div>
      

<section class="about-content mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('storage/' . $about->image_one) }}" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-6 mb-4">
                <h2>{{ $about->title_one }}</h2>
                <p> {!! $about->description_three !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
            <h2>{{ $about->title_two }}</h2>
            <p>{!! $about->description_two !!}</p>
            </div>
            <div class="col-md-6 mb-4">
                <img  src="{{ asset('storage/' . $about->image_two) }}" class="img-fluid" alt="Mission Image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
            <h2>{{ $about->title_three }}</h2>
            <p>{!! $about->description_three !!}</p>
            </div>
        </div>
    </div>
</section>
 
@empty
    <div class="text-center">
        <h3>No data available.</h3>
    </div>
@endforelse


@section('scripts')
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for Description One
    CKEDITOR.replace('description_one', {
        height: 200,
        readOnly: true
    });

    // Initialize CKEditor for Description Two
    CKEDITOR.replace('description_two', {
        height: 200,
        readOnly: true
    });

    // Initialize CKEditor for Description Three
    CKEDITOR.replace('description_three', {
        height: 200,
        readOnly: true
    });
</script>
@endsection
@endsection
    







