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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
<div class="card-header-actions d-flex justify-content-end mt-3">
<a class="btn btn-primary  text-white btn-sm" href="{{ route('blogs.create') }}">
                <i class="fa fa-plus"></i> Add Blog
            </a>
</div>
<div class="container my-5">
    <div class="row"> 
        @forelse ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card rounded-3 position-relative shadow-sm">
                <div class="position-absolute top-0 start-0 rounded-3">
                    <img
                       src="{{ asset('storage/' . $blog->image_one) }}"
                        alt=""
                        class="img-fluid p-2 vert-move"
                        style="width: 80px; height: 80px;"
                    />
                </div>

                <div class="card-body p-3">
                    <div class="card-text text-end fw-semibold" style="font-size: 13px;">
                        <span class="pe-1">
                            <i class="fas fa-clock"></i>
                        </span>
                        Published On
                    </div>
                    <div class="card-text text-end fw-semibold" style="font-size: 13px;">
                        <span class="pe-1">
                            <i class="fas fa-calendar"></i>
                        </span>
                       {{ $blog->created_at }} <!-- Replace with actual date -->
                    </div>
                    <div class="card-title fw-bold p-4" style="font-size: 20px;">
                       {{ $blog->title }} <!-- Replace with actual title -->
                    </div>
                    <div class="position-absolute bottom-0 end-0">
                        <img
                      src="{{ URL('images/design/about_1_shape1.png') }}"
                            alt=""
                            class="img-fluid p-2 vert-move"
                            style="width: 150px; height: 150px;"
                        />
                    </div>
                    <div class="d-inline text-start ms-3">
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        <a
                        href="{{ route('blogs.show', $blog->id) }}" 
                            class="btn text-uppercase text-white fw-bold border-0 rounded-1 px-4 py-2"
                            style="background-color: #fe5722; font-size: 12px;"
                        >
                        <i class="fa fa-eye"></i>
                            
                        </a>
                        <a
                        href="{{ route('blogs.edit', $blog->id) }}" 
                            class="btn text-uppercase text-white fw-bold border-0 rounded-1 px-4 py-2"
                            style="background-color: #fe5722; font-size: 12px;"
                        >
                        <i class="fa fa-pencil"></i>             
                        </a>
                        @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> 
                                    </button>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
    <div class="text-center">
        <h3>No data available.</h3>
    </div>
@endforelse

        <!-- Add more blog cards as needed -->
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
