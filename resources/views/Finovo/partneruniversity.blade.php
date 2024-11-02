@extends('layouts.main')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

    <div class="container " style="position: relative;">
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
    
        <div class="row mt-4">
      
        <div class="container my-5">
        <h4 class="text-center fw-bold mb-4">Our Top Partner Universities</h4>
        <div class="d-flex justify-content-center mb-3">
            <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3 me-2" data-target="usa">USA</div>
            <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3 me-2" data-target="uk"> UK & Ireland</div>
            <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3 me-2 active" data-target="canada"> Canada</div>
            <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3 me-2" data-target="australia"> Australia & New Zealand</div>
            <div class="country-tab px-3 py-2 border text-center bg-danger text-white rounded-3" data-target="europe"> Europe</div>
        </div>

        <div id="tab-content">
            <div class="tab-content" id="usa" style="display: none;">
                <!-- USA Universities (add image paths here) -->
                <img src="/images/university1.png" alt="University 1">
                <!-- Add other university logos here -->
            </div>
            <div class="tab-content" id="uk" style="display: none;">
                <!-- UK & Ireland Universities -->
                <img src="/images/university2.png" alt="University 2">
                <!-- Add other university logos here -->
            </div>
            <div class="tab-content" id="canada">
                <!-- Canada Universities -->
                <img src="/images/loyalist-college.png" alt="Loyalist College">
                <img src="/images/seneca.png" alt="Seneca College">
                <img src="/images/algonquin-college.png" alt="Algonquin College">
                <img src="/images/centennial-college.png" alt="Centennial College">
                <img src="/images/dalhousie.png" alt="Dalhousie University">
                <img src="/images/university-of-regina.png" alt="University of Regina">
                <img src="/images/humber.png" alt="Humber College">
                <img src="/images/university-of-victoria.png" alt="University of Victoria">
                <img src="/images/niagara-college.png" alt="Niagara College">
                <img src="/images/university-of-windsor.png" alt="University of Windsor">
                <img src="/images/university-of-manitoba.png" alt="University of Manitoba">
                <img src="/images/mohawk-college.png" alt="Mohawk College">
            </div>
            <div class="tab-content" id="australia" style="display: none;">
                <!-- Australia & New Zealand Universities -->
                <img src="/images/university3.png" alt="University 3">
                <!-- Add other university logos here -->
            </div>
            <div class="tab-content" id="europe" style="display: none;">
                <!-- Europe Universities -->
                <img src="/images/university4.png" alt="University 4">
                <!-- Add other university logos here -->
            </div>
        </div>
    </div>

          

        </div>
       
       
        <div class="mt-4 d-grid col-10 col-md-6 col-xl-4 mx-auto">
            <button type="button" class="btn btn-outline-dark mt-3">See More</button>
        </div>
    </div>

   
</div>
<script>
        // JavaScript for tab functionality
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

            // Set default tab (Canada)
            document.querySelector('.country-tab.active').click();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
