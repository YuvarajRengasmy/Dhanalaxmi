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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

<script>
    // JavaScript to auto-close the alert after 5 seconds
    document.addalbumListener('DOMContentLoaded', function () {
        setTimeout(() => {
            const alert = document.querySelector('.custom-alert');
            if (alert) {
                alert.classList.remove('show'); // Hides the alert
                alert.addalbumListener('transitionend', () => alert.remove()); // Removes from DOM after transition
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
                <h4 class="fw-bold">Explore the vibrant albums happening locally and globally.</h4>
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
<a class="btn btn-primary  text-white btn-sm" href="{{ route('albums.create') }}">
                <i class="fa fa-plus"></i> Add Gallerys
            </a>
</div>
   

    <!-- albums Section -->
    <div class="px-5 mx-3 mt-5">
        <h5 class="fw-bold">Popular Photos</h5>
        
      
        <div class="row mt-4">
        @forelse ($albums as $album)
            <!-- album Card -->
            <div class="col-12 col-lg-6 col-xl-4 mb-3">
                <img src="{{ asset('storage/' . $album->image) }}" alt="albums" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                <div class="row mt-2 px-3">
                    <div class="col-9">

                        <h6>
                        <form action="{{ route('albums.destroy', $album->id) }}" method="POST">
                        <a
                        href="{{ route('albums.show', $album->id) }}" 
                            class="btn btn-primary text-uppercase text-white fw-bold border-0 rounded-1  "
                            style=" font-size: 12px;"
                        >
                        <i class="fa fa-eye"></i>
                            
                        </a>
                        <a
                        href="{{ route('albums.edit', $album->id) }}" 
                            class="btn btn-success text-uppercase text-white fw-bold border-0 rounded-1  "
                            style=" font-size: 12px;"
                        >
                        <i class="fa fa-pencil"></i>             
                        </a>
                        @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> 
                                    </button>
                                </form>
                        </h6>
                    </div>
                </div>
            </div>
            @empty

<div class="form-text text-danger text-center">No albums available.</div>

@endforelse
        </div>
       
       
        <div class="mt-4 d-grid col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
    </div>

   
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
