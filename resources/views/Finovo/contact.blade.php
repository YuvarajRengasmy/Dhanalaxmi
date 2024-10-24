@extends('layouts.main')

@section('meta_title', 'Contact Us | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
<header class="contact-banner">
  <div class="overlay"></div>
        <div class="container">
            <h1>Contact Us</h1>
            <p>Boost Your Skills and Career Opportunities</p>
        </div>
    </header>

<div class="container-fluid">
    <section class="py-3 py-md-5 py-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border border-dark rounded shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gy-3 gy-md-4 gy-lg-0">
                                <div class="col-12 col-lg-6 bsb-overlay" style="background: #1a1a1a; color: #fff;">
                                    <div class="row align-items-lg-center justify-content-center h-100">
                                        <div class="col-11 col-xl-10">
                                            <div class="contact-info-wrapper py-4 py-xl-5">
                                                <h2 class="h1 mb-3">Get in Touch</h2>
                                                <p class="lead fs-4 opacity-75 mb-4 mb-xxl-5">We're always on the lookout to work with new clients. If you're interested in working with us, please get in touch in one of the following ways.</p>
                                                <div class="d-flex mb-4 mb-xxl-5">
                                                    <div>
                                                        <h4 class="mb-3">Address</h4>
                                                        <address class="mb-0 opacity-75">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 mb-xxl-5">
                                                    <div class="col-12 col-xxl-6">
                                                        <div class="d-flex mb-4 mb-xxl-0">
                                                            <div>
                                                                <h4 class="mb-3">Phone</h4>
                                                                <p class="mb-0">
                                                                    <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xxl-6">
                                                        <div>
                                                            <h4 class="mb-3">E-Mail</h4>
                                                            <p class="mb-0">
                                                                <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6" style="background-image: url('{{ asset('images/design/contact_bg_1.png') }}'); background-size: cover; background-position: center;">
                                    <div class="row align-items-lg-center h-100">
                                        <div class="col-12">
                                            <h2 class="text-center mb-4 text-white">Contact Us</h2>
                                            @include('components.contact-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <section class='container'>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">Our Location</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57838.37950390939!2d80.19032506338723!3d13.038977993069373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5264b32e0e693f%3A0xa6d0a5f4bc3b6f5f!2s17%2F3A2%2C%20Gandhi%20St%20Alwartirunagar%2C%20Chennai%2C%20Tamil%20Nadu%20600087%2C%20India!5e0!3m2!1sen!2sin!4v1697954712995!5m2!1sen!2sin"
                        allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
<style>

.contact-banner {
    position: relative; /* Position relative to contain absolute children */
    background-image: url('https://cdn.pixabay.com/photo/2022/01/12/18/51/contact-us-6933645_1280.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.contact-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    mix-blend-mode: multiply; /* Blend mode */
    z-index: 1; /* Position above the background */
}

.contact-banner h1, .contact-banner p {
    position: relative; /* Position text above overlay */
    z-index: 2; /* Position text above overlay */
}

</style>
