@extends('layouts.main')

@section('meta_title', 'Services | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')

 <!-- Banner Section -->
 <header class="services-banner">
    <div class='overlay'></div>
        <div class="container">
            <h1>Our Services</h1>
            <p>Helping you succeed on your educational journey.</p>
        </div>
    </header>

    <!-- Content Section -->
    <section class="services-content">
        <div class="container">
            <h2>What We Offer</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Counselling</h5>
                            <p class="card-text">Our expert consultants will guide you through the entire process of selecting the right program and university.</p>
                            <a href="{{ url('/counselling') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Visa Filling</h5>
                            <p class="card-text">We help you complete your application accurately and on time, ensuring you meet all requirements.</p>
                            <a href="{{ url('/visa_filing') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Flight Bookings</h5>
                            <p class="card-text">Get expert guidance on your student visa application to ensure a smooth process.</p>
                            <a href="{{ url('/flight_bookings') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 4">
                        <div class="card-body">
                            <h5 class="card-title">Forex Cards</h5>
                            <p class="card-text">Attend our pre-departure sessions to prepare for your new adventure abroad.</p>
                            <a href="{{ url('/forex_cards') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 5">
                        <div class="card-body">
                            <h5 class="card-title">Internal Accomodation</h5>
                            <p class="card-text">We provide support in finding suitable accommodation near your university.</p>
                            <a href="{{ url('/accodomation') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <img src="{{ URL('images/design/visa1.jpg') }}" class="card-img-top rounded-top" style='height:12rem;' alt="Service 6">
                        <div class="card-body">
                            <h5 class="card-title">Interntional Sim Cards</h5>
                            <p class="card-text">We are here to support you throughout your study abroad journey, addressing any concerns that arise.</p>
                            <a href="{{ url('/international_simcard') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

  
    



   

    
    

    
