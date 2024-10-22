
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #343a40;">
    <a class="navbar-brand" href="#">Dhanalaxmi Finovo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/services') }}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <li><a class="dropdown-item" href="#">Free Counselling</a></li>
                    <li><a class="dropdown-item" href="#">Free Visa Filling</a></li>
                    <li><a class="dropdown-item" href="#">Flight Bookings</a></li>
                    <li><a class="dropdown-item" href="#">Forex Cards</a></li>
                    <li><a class="dropdown-item" href="#">Internal Accommodation</a></li>
                    <li><a class="dropdown-item" href="#">International SIM Cards</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/studyabroad') }}" id="studyAbroadDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Study Abroad
                </a>
                <ul class="dropdown-menu" aria-labelledby="studyAbroadDropdown">
                    <li><a class="dropdown-item" href="#">Study in USA</a></li>
                    <li><a class="dropdown-item" href="#">Study in UK</a></li>
                    <li><a class="dropdown-item" href="#">Study in New Zealand</a></li>
                    <li><a class="dropdown-item" href="#">Study in Australia</a></li>
                    <li><a class="dropdown-item" href="#">Study in Singapore</a></li>
                    <li><a class="dropdown-item" href="#">Study in Malaysia</a></li>
                    <li><a class="dropdown-item" href="#">Study in Canada</a></li>
                    <li><a class="dropdown-item" href="#">Study in Dubai</a></li>
                    <li><a class="dropdown-item" href="#">Study in Germany</a></li>
                    <li><a class="dropdown-item" href="#">Study in Ukraine</a></li>
                    <li><a class="dropdown-item" href="#">Study in Mauritius</a></li>
                    <li><a class="dropdown-item" href="#">Study in Malta</a></li>
                    <li><a class="dropdown-item" href="#">Study in France</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/coaching') }}">Coaching</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/certification') }}">Certifications</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</nav>
