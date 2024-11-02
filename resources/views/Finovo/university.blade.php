@extends('layouts.main')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container" style="position: relative;">
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

    <div class="px-5 mx-3 mt-3">
        <h4 class="text-center fw-bold mb-4">Our Top Partner Universities</h4>

        <!-- Country Tabs -->
        <div class="d-flex justify-content-center mb-3">
            @foreach($universitiesByCountry as $location => $universities)
                <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3 me-2" data-target="{{ \Str::slug($location) }}">
                    {{ $location }}
                </div>
            @endforeach
        </div>

        <!-- University Logos by Country -->
        <div id="tab-content">
            @foreach($universitiesByCountry as $location => $universities)
                <div class="tab-content" id="{{ \Str::slug($location) }}" style="display: none;">
                    @foreach($universities as $university)
                        <img src="{{ asset('storage/' . $university->image) }}" alt="{{ $university->name }}" style="max-width: 200px; margin: 10px;">
                    @endforeach
                </div>
            @endforeach
        </div>

        <!-- See More Button -->
        <div class="mt-4 d-grid col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
    </div>
</div>

<!-- JavaScript for tab functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.country-tab');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                contents.forEach(content => content.style.display = 'none');
                document.getElementById(this.dataset.target).style.display = 'block';
            });
        });

        // Set default tab (first country)
        if (tabs.length > 0) {
            tabs[0].click();
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
