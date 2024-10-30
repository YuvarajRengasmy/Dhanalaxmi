@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">New Zealand: A Premier Destination for World-Class Education and Research
          </h2>
        
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.asfeconsultants.com/wp-content/uploads/2013/06/malaysia.jpg" alt="Visa Assistance" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


<!-- Why Study in the USA Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center">Why Study in New Zealand</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-university card-icon"></i>
                    <div class="card-body">
                        <h4>Universities</h4>
                        <p>25+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>NZ$27k-55k </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>34K </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>2-3 Years Post-Study </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-content col-md-7">
                <h5>Global Recognition</h5>
                <p>Graduates from New Zealand universities are earning acclaim as innovative thinkers, with their qualifications gaining international recognition.!</p>
                <h5>Best of Both Worlds</h5>
                <p>With affordable costs coupled with international recognition, New Zealand truly offers the best of both worlds. </p>
                <h5>Migration and Job Search Opportunity </h5>
                <p>Upon completing their courses, students are granted a visa to search for employment, along with a solid opportunity for immigration</p>
                <h5>Accredited Institutions and Courses</h5>
                <p>The New Zealand Quality Assurance Framework (NZQA) ensures the quality of programs offered by both public and private institutions </p>
                <h5>1-3 Years of Post-Study Work Visa </h5>
                <p>Graduates can apply for a Post-Study Work Visa, allowing them to stay and work in New Zealand for up to three years </p>
                <h5>Low Tuition Fees </h5>
                <p>Studying in New Zealand is relatively more affordable than in many other countries, making it a financially viable option</p>

            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in New Zealand</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Auckland - Geography</h5>
                    <p>QS World Rank: 68</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >	University of Otago - Health Sciences </h5>
                    <p>QS World Rank: 206</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Massey University - Business and Management </h5>
                    <p>QS World Rank: 239</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Victoria University of Wellington - Humanities and Social Sciences </h5>
                    <p>QS World Rank: 241</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Waikato  </h5>
                    <p>QS World Rank: 250</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">		University of Canterbury   </h5>
                    <p>QS World Ranking: 256</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Lincoln University - Health Sciences and Business</h5>
                    <p>QS World Rank: 362</p>
                </div>
            </div>
           
           
          
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in the USA</h2>
        <h6 class="text-center">The financial commitment can vary based on institution choice, program selection, and living expenses.</h6>
        <div class="row card-deck">
            <div class="col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Popular Courses in the USA</h5>
                        <p><span class="text-primary">Business Management</span></p>
                        <p><span class="text-primary">Agriculture</span></p>
                        <p><span class="text-primary">Computer Science</span></p>
                        <p><span class="text-primary">IT</span></p>
                        <p><span class="text-primary">Hospitality</span></p>
                        <p><span class="text-primary">Tourism</span></p>
                        <p><span class="text-primary">Healthcare</span></p>
                        <p><span class="text-primary">Art and Design</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Tuition Fees</h5>
                        <p><span class="text-primary">Diplomas and Certificates</span>: USD 24,000 - 30,000</p>
                        <p><span class="text-primary">Bachelor’s Degree</span>: USD 24,000 - 35,000</p>
                        <p><span class="text-primary">Master’s Degree</span>: USD 27,000 - 55,000</p>
                        <h5>Living Expenses</h5>
                        <p><span class="text-primary">Approx:</span> USD 20,000</p>
                        <h5>Accommodation (Average per Month)</h5>
                        <p><span class="text-primary">On-Campus:</span> USD 410 - 700</p>
                        <p><span class="text-primary">Off-Campus:</span> USD 90 - 190</p>
                        <p><span class="text-primary">Homestay:</span> USD 290 - 310</p>
                    </div>
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
                <h2>Scholarships in New Zealand </h2>
                <p>The New Zealand Excellence Awards are available for eligible students, with some universities offering their own scholarships. Only students with exceptional grades are generally considered.
                !</p>
                <h2>New Zealand Study Visa Process</h2>
                <p>A student visa requires :</p>
                <p>⦁ An unconditional offer letter</p>
	<p>⦁ Financial proof for the next 12 months covering tuition and living expenses</p>
	<p>⦁ All relevant academic documents</p>
	<p>⦁ Medical insurance</p>
	<p>⦁ A police clearance certificate</p>

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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i> Career Prospects in New Zealand
                        </h4>
                        <p>The job market in New Zealand is diverse, providing opportunities across various sectors:</p>
                        <ul class="text-start">
                            <li>Information Technology</li>
                            <li>Healthcare</li>
                            <li>Education</li>
                            <li>Tourism and Hospitality</li>
                            <li>Agriculture</li>
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
                            <i class="fas fa-file-alt me-2" aria-hidden="true"></i> Documents Required to Study in New Zealand
                        </h4>
                        <p>Students typically need the following documentation when applying: </p>
                        <ul class="text-start">
                            <li>Copies of high school mark sheets</li>
                            
                            <li>	Completed Application Form</li>
<li>	Passport</li>
<li> Academic Transcripts</li>
<li>	English Language Proficiency</li>
<li>	Letters of Recommendation</li>
<li>	Statement of Purpose (SOP)</li>
<li>	CV/Resume</li>
<li>	Portfolio (if applicable)</li>
<li>	Financial Documentation</li>
<li>	Health and Medical Insurance

                 
	

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
