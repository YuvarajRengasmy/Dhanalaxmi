@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">UK: Join a Legacy of Excellence
          </h2>
        
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Consult Now</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://globaldegrees.in/wp-content/uploads/2024/01/Why-Australia.png" alt="Visa Assistance" class="img-fluid">
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
                    <i class="fas fa-university card-icon"></i>
                    <div class="card-body">
                        <h4>Universities</h4>
                        <p>150+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>£11k - £35k</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>600,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Graduate  </h4>
                        <p> 2 years Immigration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Top Universities in the UK</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Cambridge </h5>
                    <p>QS World Rank: 2</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >	University of Oxford </h5>
                    <p>QS World Rank: 3</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Imperial College London </h5>
                    <p>QS World Rank: 6</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Edinburgh </h5>
                    <p>QS World Rank: 22</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Manchester </h5>
                    <p>QS World Rank: 32</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	King’s College London  </h5>
                    <p>QS World Ranking: 40</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	London School of Economics  </h5>
                    <p>QS World Rank: 45</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Warwick  </h5>
                    <p>QS World Rank: 67</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Glasgow   </h5>
                    <p>QS World Ranking: 76</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary ">University of Birmingham   </h5>
                    <p>QS World Rank: 80</p>
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
            <h6 class="text-align-center">The financial commitment can vary based on institution choice, program selection, and living expenses.</h6>
            <div class="col-md-6">
                <div class="card text-center">
                    <h5>Popular Courses in the UK</h5>
                    <p><span class="text-primary">Business Management</span></p>
                    <p><span class="text-primary">Engineering </span></p>
                    <p><span class="text-primary">Computer Science</span></p>
                    <p><span class="text-primary">Law</span></p>
                    <p><span class="text-primary">Finance</span></p>
                    <p><span class="text-primary">Architecture</span></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <h5>Tuition Fees </h5>
                    <p><span class="text-primary">	Foundation program</span>£10,000 - £20,000</p>
                    <p><span class="text-primary">	Bachelor’s degree</span>£15,000 - £35,000</p>
                    <p><span class="text-primary"> Master’s degree</span>£15,000 - £40,000</p>
                    <h5>Living Expenses  </h5>
                    <p><span class="text-primary">	Outer London</span>: £1,136</p>
                    <p><span class="text-primary">	Inner London</span>: £1,483</p>
                   
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
                <h2>Scholarships in the UK</h2>
                <p>Numerous UK universities provide scholarships based on merit, and the British Government sponsors various awards
                !</p>
                <h2>UK Study Visa Process</h2>
                <p>The UK Student Visa allows international students to study at accredited institutions.</p>
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>  Career Prospects in the UK
                        </h4>
                        <p>The UK employment landscape offers opportunities across various sectors:</p>
                        <ul class="text-start">
                            <li>Information Technology</li>
                            <li>Healthcare</li>
                            <li>Education</li>
                            <li>Hospitality</li>
                            <li>Law</li>
                            <li>Business</li>
                            <li>Marketing</li>
                            <li>Engineering</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Visa Documents Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-file-alt me-2" aria-hidden="true"></i>  Essential Documents for Studying in the UK
                        </h4>
                        <p>Students typically need the following documentation when applying: </p>
                        <ul class="text-start">
                            <li>Copies of high school mark sheets</li>
                            <li>Bachelor’s degree transcripts</li>
                            <li>Two academic reference letters</li>
                            <li>Statement of Purpose</li>
                            <li>Curriculum Vitae/Resume</li>
                            <li>Photocopied scorecards for language tests</li>
                            <li>Portfolio (if applicable)</li>
                 
	

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
