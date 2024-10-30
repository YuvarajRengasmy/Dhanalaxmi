@extends('layouts.main')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <style>
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050; /* Ensures the alert appears on top */
            width: auto;
            max-width: 300px; /* Adjust width as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow effect */
        }
        /* Style for testimonial card */
        .testimonial-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-card .img-fluid {
            border-radius: 8px;
            height: 150px;
            object-fit: cover;
            width: 100%;
        }



    

    </style>
    <div class="container my-2 p-3" style="position: relative;">
        
        <!-- Banner Section -->
        <div class="w-100" style="height: 300px; background-image: url('banner-image-url.jpg'); background-size: cover; background-position: center;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                <div class="text-center text-light pt-4">
                    <h4 class="mt-5 fw-bold">Don't miss out!</h4>
                    <h4 class="fw-bold">Explore the vibrant events happening locally and globally.</h4>
                </div>
                <div class="mt-4 position-relative text-center">
                    <span class="position-absolute start-25 text-center p-2 px-3 border-0" id="inputGroup-sizing-default">
                        <i class="fas fa-search fs-5"></i>
                    </span>
                    <input
                        type="search"
                        placeholder="Search"
                        aria-describedby="button-addon3"
                        class="form-control-lg bg-light border-0 ps-5 w-50 mx-auto"
                    />
                </div>
            </div>
        </div>

        <!-- Events Section -->
        <div class="px-5 mx-3 mt-5">
            <h5 class="fw-bold">Popular Events</h5>
            <div class="d-flex gap-2 mt-3">
                <button class="btn btn-outline-primary">All</button>
                <button class="btn btn-outline-primary">Today</button>
                <button class="btn btn-outline-primary">Tomorrow</button>
            </div>

          
                <div class="row mt-4">
                    <!-- Event Card -->
                    @forelse ($events as $event)
                    <div class="col-12 col-lg-6 col-xl-4 mb-3">
                    <div class="testimonial-card">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="event image" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        <div class="row mt-2 px-3">
                            <div class="col-3 text-center">
                                <h6>
                                    <span class="text-info fw-bold">{{ $event->date }}</span>
                                </h6>
                            </div>
                            <div class="col-9">
                                <h6 class="m-0">{{ $event->title }}</h6>
                                <small>{{ $event->event_type }}</small>
                                <small class="d-block">{{ $event->time }}</small>
                            </div>
                        </div>
                        </div>
                    </div>
                    @empty
                <div class="form-text text-danger text-center">No events available.</div>
            @endforelse
                </div>
         
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
