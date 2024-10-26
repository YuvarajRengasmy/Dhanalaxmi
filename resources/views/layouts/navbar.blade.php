<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ URL('images/flags/logoicon-bg.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
        <span>Dhanalaxmi Overseas</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="partnerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Partner With Us
                </a>
                <div class="dropdown-menu" aria-labelledby="partnerDropdown">
                    <a class="dropdown-item" href="#">Agency Partner</a>
                    <a class="dropdown-item" href="#">University Partners</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item dropend" href="#" id="testPreparationDropdown">
                        Test Preparation
                    </a>
                    <!-- Dropend dropdown menu -->
                    <div class="dropdown dropend">
                        <div class="dropdown-menu" aria-labelledby="testPreparationDropdown">
                            <a class="dropdown-item" href="{{ url('/test_prep_1') }}">Test Prep 1</a>
                            <a class="dropdown-item" href="{{ url('/test_prep_2') }}">Test Prep 2</a>
                            <a class="dropdown-item" href="{{ url('/test_prep_3') }}">Test Prep 3</a>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{ url('/counselling') }}">Free Counselling</a>
                    <a class="dropdown-item" href="{{ url('/visa_filing') }}">Free Visa Filing</a>
                    <a class="dropdown-item" href="{{ url('/flight_bookings') }}">Flight Bookings</a>
                    <a class="dropdown-item" href="{{ url('/forex_cards') }}">Forex Cards</a>
                    <a class="dropdown-item" href="{{ url('/accommodation') }}">Accommodation Support</a>
                    <a class="dropdown-item" href="{{ url('/international_simcard') }}">International SIM Cards</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="destinationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Destinations
                </a>
                <div class="dropdown-menu" aria-labelledby="destinationsDropdown">
                    <a class="dropdown-item" href="{{ url('/study_in_us') }}">USA</a>
                    <a class="dropdown-item" href="{{ url('/study_in_uk') }}">UK</a>
                    <a class="dropdown-item" href="{{ url('/study_in_newzealand') }}">New Zealand</a>
                    <a class="dropdown-item" href="{{ url('/study_in_australia') }}">Australia</a>
                    <a class="dropdown-item" href="{{ url('/study_in_singapore') }}">Singapore</a>
                    <a class="dropdown-item" href="{{ url('/study_in_malaysia') }}">Malaysia</a>
                    <a class="dropdown-item" href="{{ url('/study_in_canada') }}">Canada</a>
                    <a class="dropdown-item" href="{{ url('/study_in_dubai') }}">Dubai</a>
                    <a class="dropdown-item" href="{{ url('/study_in_germany') }}">Germany</a>
                    <a class="dropdown-item" href="{{ url('/study_in_ukraine') }}">Ukraine</a>
                    <a class="dropdown-item" href="{{ url('/study_in_mauritius') }}">Mauritius</a>
                    <a class="dropdown-item" href="{{ url('/study_in_malta') }}">Malta</a>
                    <a class="dropdown-item" href="{{ url('/study_in_france') }}">France</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Partnered Universities</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Blogs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Success Stories</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</nav>
