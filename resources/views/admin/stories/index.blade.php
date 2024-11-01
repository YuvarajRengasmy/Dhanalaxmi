@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
@if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show custom-alert justify-content-end" role="alert">
        {{ session('success') }}
    </div>
@endif
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

        .testimonial-content {
            margin-top: 5px;
        }

        .testimonial-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .testimonial-rating {
            color: #f39c12;
        }

        .testimonial-review {
            font-size: 14px;
            color: #555;
            margin-top: 1px;
            height: 50px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .action-buttons {
            margin-top: 15px;
        }

        .btn-custom {
            font-size: 12px;
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

<script>
    // JavaScript to auto-close the alert after 5 seconds
    document.addstorieListener('DOMContentLoaded', function () {
        setTimeout(() => {
            const alert = document.querySelector('.custom-alert');
            if (alert) {
                alert.classList.remove('show'); // Hides the alert
                alert.addstorieListener('transitionend', () => alert.remove()); // Removes from DOM after transition
            }
        }, 5000); // 5000 ms = 5 seconds
    });
</script>

<div class="container " style="position: relative; top: 4rem;">
    <!-- Banner Section -->
    <div style="width: 100%; height: 300px; background-image: url('banner-image-url.jpg'); background-size: cover; background-position: center;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4); height: 300px;">
            <div class="text-center pt-4 text-light">
                <h4 class="mt-5 fw-bold">Don't miss out!</h4>
                <h4 class="fw-bold">Explore the vibrant stories happening locally and globally.</h4>
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

    <div class="card-header-actions d-flex justify-content-end mt-3">
<a class="btn btn-primary  text-white btn-sm" href="{{ route('stories.create') }}">
                <i class="fa fa-plus"></i> Add storie
            </a>
</div>
   

    <!-- stories Section -->
    <div class="px-5 mx-3 mt-5">
        <h5 class="fw-bold">Popular Stories</h5>
 
      
    <div class="row">
    @forelse ($stories as $storie)
        <div class="col-12 col-lg-6 col-xl-4 mb-4">
            <div class="testimonial-card">
                <img src="{{ asset('storage/' . $storie->photo) }}" alt="Testimonial Image" class="img-fluid">
                <div class="testimonial-content">
                    <h6 class="testimonial-name">{{ $storie->name }}</h6>
                    <p class="testimonial-rating">{{ $storie->rating }}/5 <i class="fas fa-star"></i></p>
                    <p class="testimonial-review">{!! $storie->review !!}</p>
                </div>
                <div class="action-buttons d-flex justify-content-start">
                <form action="{{ route('stories.destroy', $storie->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('stories.show', $storie->id) }}">
                                        <i class="fa fa-eye"></i> 
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('stories.edit', $storie->id) }}">
                                        <i class="fa fa-pen"></i> 
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
        @empty

<div class="form-text text-danger text-center">No stories available.</div>

@endforelse
    </div>
    <div class="mt-4 d-grid col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
</div>
           
       

   
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script>
    // Initialize CKEditor for Description One
    CKEDITOR.replace('review', {
        height: 200,
        readOnly: true
    });

    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
