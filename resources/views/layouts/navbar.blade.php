<nav class="navbar navbar-expand-lg  sticky-top" >
    <a class="navbar-brand" href="{{ url('/') }}">  
    <img src="{{ URL('images/flags/logoicon-bg.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        <div class="d-inline-block align-middle ">
            <span>Dhanalaxmi Overseas</span><br>
            <small class="text-white">Abroad Education Consultancy</small>
        </div>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/services') }}" >
                    Services
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="{{ url('/counselling') }}">Free Counselling</a>
                    <a class="dropdown-item" href="{{ url('/visa_filing') }}">Free Visa Filling</a>
                    <a class="dropdown-item" href="{{ url('/flight_bookings') }}">Flight Bookings</a>
                    <a class="dropdown-item" href="{{ url('/forex_cards') }}">Forex Cards</a>
                    <a class="dropdown-item" href="{{ url('/accodomation') }}">Internal Accommodation</a>
                    <a class="dropdown-item" href="{{ url('/international_simcard') }}">International SIM Cards</a>
                </div>
            </li>
          

            <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('/studyabroad') }}" > 
                    Study Abroad
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item"  href="{{ url('/study_in_us') }}">Study in USA</a>
                    <a class="dropdown-item" href="{{ url('/study_in_uk') }}">Study in UK</a>
                    <a class="dropdown-item" href="{{ url('/study_in_newzealand') }}">Study in New Zealand</a>
                    <a class="dropdown-item" href="{{ url('/study_in_australia') }}">Study in Australia</a>
                    <a class="dropdown-item" href="{{ url('/study_in_singapore') }}">Study in Singapore</a>
                    <a class="dropdown-item" href="{{ url('/study_in_malaysia') }}">Study in Malaysia</a>
                    <a class="dropdown-item" href="{{ url('/study_in_canada') }}">Study in Canada</a>
                    <a class="dropdown-item" href="{{ url('/study_in_dubai') }}">Study in Dubai</a>
                    <a class="dropdown-item" href="{{ url('/study_in_germany') }}">Study in Germany</a>
                    <a class="dropdown-item" href="{{ url('/study_in_ukarine') }}">Study in Ukraine</a>
                    <a class="dropdown-item" href="{{ url('/study_in_mauritius') }}">Study in Mauritius</a>
                    <a class="dropdown-item" href="{{ url('/study_in_malta') }}">Study in Malta</a>
                    <a class="dropdown-item" href="{{ url('/study_in_france') }}">Study in France</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/coaching') }}">Coaching</a></li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/certification') }}">Certifications</a></li>
            <li class="nav-item"><a class="nav-link"  href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</nav>