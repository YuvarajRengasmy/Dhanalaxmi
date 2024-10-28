@extends('layouts.main')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <div class="container " style="position: relative; top: 4rem;">
    <!-- Banner Section -->
    <div style="width: 100%; height: 300px; background-image: url('banner-image-url.jpg'); background-size: cover; background-position: center;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4); height: 300px;">
            <div class="text-center pt-4 text-light">
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
            <div class="col-12 col-lg-6 col-xl-4 mb-3">
                <img src="https://www.shutterstock.com/image-vector/world-map-isolated-modern-colorful-600nw-2477133801.jpg" alt="events" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                <div class="row mt-2 px-3">
                    <div class="col-3 text-center">
                        <h5>
                            <span class="text-info fw-bold">Mar</span>
                            <span class="fw-bold">20</span>
                        </h5>
                    </div>
                    <div class="col-9">
                        <h6 class="m-0">Event Title</h6>
                        <small>Event Type</small>
                        <small class="d-block">10:00 AM - 2:00 PM</small>
                        <h6>
                            <small>
                                <i class="fas fa-ticket-alt me-1"></i>50 Coins
                                • <i class="fas fa-star text-info"></i> 30 interested
                            </small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-text text-danger text-center">No events available.</div>
        <div class="mt-4 d-grid col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
    </div>

    <!-- Workshops Section -->
    <div class="px-5 mx-3 mt-5">
        <h5 class="fw-bold">Popular Workshops</h5>
        <div class="d-flex gap-2 mt-3">
            <button class="btn btn-outline-primary">All</button>
            <button class="btn btn-outline-primary">Today</button>
            <button class="btn btn-outline-primary">Tomorrow</button>
        </div>
        <div class="row mt-4">
            <!-- Workshop Card -->
            <div class="col-12 col-lg-6 col-xl-4 mb-3">
                <img src="workshop-image-url.jpg" alt="workshops" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                <div class="row mt-2 px-3">
                    <div class="col-3 text-center">
                        <h5>
                            <span class="text-info fw-bold">Apr</span>
                            <span class="fw-bold">15</span>
                        </h5>
                    </div>
                    <div class="col-9">
                        <h6 class="m-0">Workshop Title</h6>
                        <small>Workshop Type</small>
                        <small class="d-block">1:00 PM - 5:00 PM</small>
                        <h6>
                            <small>
                                <i class="fas fa-ticket-alt me-1"></i>Free
                                • <i class="fas fa-star text-info"></i> 45 interested
                            </small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-text text-danger text-center">No workshops available.</div>
        <div class="mt-4 d-grid pb-5 col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
