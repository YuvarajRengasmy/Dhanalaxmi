@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">USA: The Pinnacle of Education and Infinite Opportunities
          </h2>
        
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Consult Now</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.firststepoverseas.com/assets/img/home-two/study-usa.png" alt="Visa Assistance" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


<!-- Why Study in the USA Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center">Why Study in the USA?</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-university card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Universities</h4>
                        <p>4000+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>$20,000 - $60,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>900,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Opportunities</h4>
                        <p>1-3 Years Post-Study</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Top Universities in the USA</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">  Massachusetts Institute of Technology (MIT)</h5>
                    <p>QS World Rank: 1</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Harvard University</h5>
                    <p>QS World Rank: 4</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Stanford University</h5>
                    <p>QS World Rank: 5</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Cornell University</h5>
                    <p>QS World Rank: 13</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary"></i>California Institute of Technology</h5>
                    <p>QS World Rank: 15</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Yale University </h5>
                    <p>QS World Ranking: 16</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Princeton University </h5>
                    <p>QS World Rank: 17</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Johns Hopkins University </h5>
                    <p>QS World Rank: 28</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	New York University  </h5>
                    <p>QS World Ranking: 38</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary ">Carnegie Mellon University  </h5>
                    <p>QS World Rank: 52</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Michigan State University </h5>
                    <p>QS World Rank: 136</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in the USA</h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h5><i class="fa-solid fa-comments-dollar text-danger"></i><strong>    Tuition Fees</strong></h5>
                    <p><span class="text-primary">Associate Degree</span>: $20,000 - $60,000</p>
                    <p><span class="text-primary">Bachelor's Degree</span>: $15,000 - $40,000</p>
                    <p><span class="text-primary">Master's Degree</span>: $20,000 - $60,000</p>
                    <p><span class="text-primary">Living Expenses</span>: Approx. $16,000</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <h5><i class="fa-solid fa-hospital text-danger"></i><strong>    Accommodation</strong></h5>
                    <p><span class="text-primary">On-Campus</span>: $800 - $900 per month</p>
                    <p><span class="text-primary">Off-Campus</span>: $500 - $1500 per month</p>
                    <p><span class="text-primary">Homestay</span>: $1000 - $1200 per month</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section -->
<section class="contact-section my-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-content col-md-7">
                <h2>Scholarships in the USA</h2>
                <p>⦁	Various scholarships are available for Indian students based on merit and financial need. Types of scholarships include Fellowships, Assistantships, and Need-Based aid.
                !</p>
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<!-- Career Prospects and Visa Documents Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Career Prospects Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>  Career Prospects in the USA
                        </h4>
                        <p>The USA offers an abundance of job opportunities in sectors such as</p>
                        <ul class="text-start">
                            <li>Information Technology</li>
                            <li>Healthcare</li>
                            <li>Green Renewable Energy</li>
                            <li>E-commerce</li>
                            <li>Finance and Banking</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Visa Documents Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-file-alt me-2" aria-hidden="true"></i>  Visa Documents Required to Study in the USA
                        </h4>
                        <p>Common documents required for the application process include</p>
                        <ul class="text-start">
                            <li>Application Form</li>
                            <li>Statement of Purpose</li>
                            <li>Resume</li>
                            <li>Recommendation Letters</li>
                            <li>Academic Transcripts</li>
                            <li>Bank Certificate</li>
                            <li>Test Score Report</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Styling Section -->
<style>
    /* General Styles */
    .section { padding: 50px 0; background-color: #FFFFFF; }

  
    /* Card Styles */
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .card-title {
        color: #106EB
    }
    .card-icon {
        font-size: 3em;
        color: #106EB;
    }
</style>
