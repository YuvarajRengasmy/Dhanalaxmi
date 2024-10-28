@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

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
    <h4 class="card-header mb-3">
        <div class="card-header-actions d-flex justify-content-end mb-2">
            <a class="btn btn-success btn-sm" href="{{ route('abouts.create') }}">
                <i class="fa fa-plus"></i> Add About
            </a>
        </div>
        About View 
    </h4>
</header>

@forelse ($abouts as $about)
    <div class="overlay">
    <div class="d-flex justify-content-end mb-3">
        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST">
           
            <a class="btn btn-primary btn-sm" href="{{ route('abouts.edit', $about->id) }}">
                <i class="fa fa-pen"></i> 
            </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                <i class="fa fa-trash"></i> 
            </button>
        </form>
    </div>
    </div>
    <div class="container">
        <h1>About Us</h1>
        <p>Your gateway to a world of educational opportunities.</p>
    </div>
   
    <!-- Content Section -->
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/' . $about->image_one) }}" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-6 mb-4">
                    <h2>{{ $about->title_one }}</h2>
                    <!-- CKEditor for Description One -->
                    <div id="description_one">
                        {!! $about->description_one !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2>{{ $about->title_two }}</h2>
                    <!-- CKEditor for Description Two -->
                    <div id="description_two">
                        {!! $about->description_two !!}
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/' . $about->image_two) }}" class="img-fluid" alt="Mission Image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>{{ $about->title_three }}</h2>
                    <!-- CKEditor for Description Three -->
                    <div id="description_three">
                        {!! $about->description_three !!}
                    </div>
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
