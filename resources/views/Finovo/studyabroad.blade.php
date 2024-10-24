@extends('layouts.main')

@section('meta_title', 'Study Abroad | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')



@section('content')
<header class="study-banner">
    <div class='overlay'></div>
        <div class="container">
            <h1>Study Abroad Opportunities</h1>
            <p>Explore the world while you study in some of the best universities.</p>
        </div>
    </header>

    <!-- Countries Section -->
    <section class="countries-section">
        <div class="container">
            <h2>Explore Our Top Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/uk.avif') }}" class="card-img-top rounded-top" alt="Study in UK" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in UK</h5>
                            <p class="card-text">Experience world-class education in the UK. Discover diverse cultures and innovative teaching methods.</p>
                            <a href="{{ url('/study_in_uk') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/usa.webp') }}" class="card-img-top rounded-top" alt="Study in USA" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in USA</h5>
                            <p class="card-text">Join leading universities in the USA, known for their academic excellence and vibrant campus life.</p>
                            <a  href="{{ url('/study_in_us') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/australia.avif') }}" class="card-img-top rounded-top" alt="Study in Australia" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Australia</h5>
                            <p class="card-text">Explore stunning landscapes while receiving a high-quality education in Australia’s top institutions.</p>
                            <a href="{{ url('/study_in_australia') }}" class="btn  btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/new zealand.avif') }}" class="card-img-top rounded-top" alt="Study in New Zealand" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in New Zealand</h5>
                            <p class="card-text">Enjoy a unique study experience in New Zealand’s breathtaking landscapes and renowned institutions.</p>
                            <a href="{{ url('/study_in_newzealand') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/singapore.webp') }}" class="card-img-top rounded-top" alt="Study in Singapore" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Singapore</h5>
                            <p class="card-text">Discover cutting-edge research and innovation at Singapore’s top universities.</p>
                            <a href="{{ url('/study_in_singapore') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/malaysia.jpg') }}" class="card-img-top rounded-top" alt="Study in Malaysia" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malaysia</h5>
                            <p class="card-text">Experience a multicultural environment and affordable education in Malaysia’s top universities.</p>
                            <a href="{{ url('/study_in_malaysia') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/canada.jpg') }}" class="card-img-top rounded-top" alt="Study in Canada" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Canada</h5>
                            <p class="card-text">Benefit from a high standard of education and a diverse cultural experience in Canada.</p>
                            <a href="{{ url('/study_in_canada') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/dubai.jpg') }}" class="card-img-top rounded-top" alt="Study in Dubai" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Dubai</h5>
                            <p class="card-text">Experience a unique blend of culture and education in one of the world's most vibrant cities.</p>
                            <a href="{{ url('/study_in_dubai') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/germany.avif') }}" class="card-img-top rounded-top" alt="Study in Germany" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Germany</h5>
                            <p class="card-text">Benefit from high-quality education and numerous study programs in English.</p>
                            <a href="{{ url('/study_in_germany') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/ukarine.avif') }}" class="card-img-top rounded-top" alt="Study in Ukraine" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Ukraine</h5>
                            <p class="card-text">Experience affordable education with diverse programs in Ukraine's universities.</p>
                            <a href="{{ url('/study_in_ukarine') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/maruitis.jpg') }}" class="card-img-top rounded-top" alt="Study in Mauritius" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Mauritius</h5>
                            <p class="card-text">Discover beautiful beaches and a vibrant educational environment in Mauritius.</p>
                            <a href="{{ url('/study_in_mauritius') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/malta.jpg') }}" class="card-img-top rounded-top" alt="Study in Malta" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malta</h5>
                            <p class="card-text">Enjoy a unique Mediterranean experience while pursuing your studies in Malta.</p>
                            <a href="{{ url('/study_in_malta') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/france.webp') }}" class="card-img-top rounded-top" alt="Study in France" style="height:12rem">
                        <div class="card-body">
                            <h5 class="card-title">Study in France</h5>
                            <p class="card-text">Experience rich history, culture, and world-class education in France.</p>
                            <a href="{{ url('/study_in_france') }}" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

  

