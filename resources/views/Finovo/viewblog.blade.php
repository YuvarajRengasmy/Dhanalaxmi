@extends('layouts.main')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<div class="container-fluid p-0 overflow-hidden">
    <div class="row">
        <div class="col-12">
            <div class="card text-bg-dark rounded-0">
                <img
                    src="https://www.eduthrive.org/wp-content/uploads/2023/07/desktop-wallpaper-study-abroad-abroad.jpg"
                    class="card-img img-fluid"
                    style="max-height: 20rem; object-fit: cover; mix-blend-mode: multiply;"
                    alt="admission_image"
                />
                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                    <h2 class="text-uppercase text-white text-center fs-2 fw-bold">Our Blogs</h2>
                    <div class="d-flex flex-row align-items-center justify-content-center gap-3">
                        <a href="/" class="text-decoration-none text-white fs-5">Home</a>
                        <i class="fas fa-arrow-right text-white"></i>
                        <span class="text-white fs-5">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row">
        <!-- Blog Detail Section -->
        <div class="col-md-7 col-12 ">
            <h2 class="mb-3">{{ $blogs->title }}</h2>
            <div class="card">
                <!-- Carousel Section -->
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                  
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $blogs->image_one) }}" class="d-block w-100 rounded-3" style="max-height: 400px; object-fit: cover;" alt="blog-image-1">
                        </div>
                        @if($blogs->image_two)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $blogs->image_two) }}" class="d-block w-100 rounded-3" style="max-height: 400px; object-fit: cover;" alt="blog-image-2">
                        </div>
                        @endif
                        @if($blogs->image_three)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $blogs->image_three) }}" class="d-block w-100 rounded-3" style="max-height: 400px; object-fit: cover;" alt="blog-image-3">
                        </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <p class="" style="text-align: justify;">
                        {!! $blogs->content !!}
                    </p>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <!-- Sidebar Section -->
        <div class="col-md-5 col-12">
            <!-- Search Section -->
            <div class="card card-body mb-4">
                <form action="search.php" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search Blog..." aria-label="Search" />
                        <button type="submit" class="btn" style="background-color: #fe5722; color: #fff;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Tags and Share Section -->
            <div class="card card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h6 class="fw-bold">Tags:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark">Tag 1</span>
                            <span class="badge bg-light text-dark">Tag 2</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="fw-bold">Share:</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
