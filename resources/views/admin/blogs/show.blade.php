@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <div class="container-fluid p-0 overflow-hidden d-none d-lg-block">
    <div class="row">
        <div class="col-12">
            <div class="card text-bg-dark rounded-0">
                <img
                    src="https://www.eduthrive.org/wp-content/uploads/2023/07/desktop-wallpaper-study-abroad-abroad.jpg"
                    class="card-img img-fluid"
                    style="max-height: 23rem; mix-blend-mode: multiply;"
                    alt="admission_image"
                />
                <div class="card-img-overlay align-self-end">
                    <div class="text-uppercase text-white text-center fs-2 fw-bold">
                        Our Blogs
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center gap-3">
                        <div>
                            <a href="/" class="text-decoration-none text-white fs-5">
                                Home
                            </a>
                        </div>
                        <div class="text-white">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="text-white fs-5">Blog</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="content-wrapper">
        <div class="container my-5">
            <div class="row">
                <!-- Blog Detail Section -->
                <div class="col-md-7 col-12 mb-4">
                  
                    <div class="card rounded-2 border-0 shadow p-3 h-100">
                    <h4>{{ $blog->title }}</h4>
                        <!-- Carousel Placeholder -->
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $blog->image_one) }}"  class="d-block w-100" style="border-radius: 10px;" alt="blog-image-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $blog->image_two) }}" class="d-block w-100" style="border-radius: 10px;" alt="blog-image-2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $blog->image_three) }}" class="d-block w-100" style="border-radius: 10px;" alt="blog-image-2">
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
                        
                        <!-- Blog Content -->
                       
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="card card-body rounded-2 border-0 shadow mb-4">
                        <form action="search.php" method="GET">
                            <div class="input-group p-4">
                                <input type="text" name="search" class="form-control form-control-lg" style="font-size: 15px;" placeholder="Search Product..." aria-label="Search" />
                                <button type="submit" class="input-group-text btn btn-lg" style="background-color: #fe5722; color: #fff;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                   
                </div>
                <div class="card-body">
                            <p class="clearfix" style="text-align: justify;">
                            {!! $blog->content !!}
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <h6 class="fw-bold h5">Tags:</h6>
                                        <a href="#" class="text-decoration-none text-dark bg-light p-2 rounded-2">Tag 1</a>
                                        <a href="#" class="text-decoration-none text-dark bg-light p-2 rounded-2">Tag 2</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <h6 class="fw-bold h5">Share:</h6>
                                        <div class="mb-3 mt-2">
                                            <a href="#"><span class="one text-body-secondary rounded-circle ps-2 pb-2 pt-1 pe-2 fs-6"><i class="fab fa-facebook"></i></span></a>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <a href="#"><span class="one text-body-secondary rounded-circle ps-2 pb-2 pt-1 pe-2 fs-6"><i class="fab fa-linkedin"></i></span></a>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <a href="#"><span class="one text-body-secondary rounded-circle ps-2 pb-2 pt-1 pe-2 fs-6"><i class="fab fa-instagram"></i></span></a>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <a href="#"><span class="one text-body-secondary rounded-circle ps-2 pb-2 pt-1 pe-2 fs-6"><i class="fab fa-youtube"></i></span></a>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <a href="#"><span class="one text-body-secondary rounded-circle ps-2 pb-2 pt-1 pe-2 fs-6"><i class="fab fa-twitter"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- Sidebar Section -->
               
            </div>
        </div>
    </div>
    <script>
    // Initialize CKEditor for Description One
    CKEDITOR.replace('content', {
        height: 200,
        readOnly: true
    });

</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
