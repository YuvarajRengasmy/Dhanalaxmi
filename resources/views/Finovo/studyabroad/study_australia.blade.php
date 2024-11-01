@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Australia: A Top Choice for Aspiring Students
          </h2>
        
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation
            </a>
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
        
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-university card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Universities</h4>
                        <p>42</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>AUD 30k - 60k</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>700,000+ </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon text-danger"></i>
                    <div class="card-body">
                        <h4>Post-Study </h4>
                        <p> 2-4 Years Work Visa  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Australia? </h2>
        <div class="row">
        <div class="contact-content col-md-7">
                <h6><strong>Degrees with Global Recognition</strong></h6>
                <p>Australian qualifications hold substantial global credibility. Completing a degree here translates to broader career and educational prospects across the globe. </p>
                <h6><strong>Seven Top-Ranked Student Cities</strong> </h6>
                <p>According to the 2024 QS Best Student Cities Rankings, Australia boasts seven of the top 100 student-friendly cities, enriching the student experience through vibrant urban and cultural dynamics.</p>
                <h6><strong>Extended Post-Study Work Visas </strong></h6>
                <p>Australian graduates are eligible for a post-study work visa from 2 to 4 years, depending on degree level. Students in designated regional areas may qualify for up to 6 years.                </p>
                <h6><strong>Nine Universities in the World’s Top 100 </strong></h6>
                <p>Australia is home to nine elite universities that offer leading-edge programs across a range of disciplines.                </p>
                <h6><strong>Safe and Inclusive Environment</strong> </h6>
                <p>With a diverse student body and a commitment to safety, Australia provides a multicultural backdrop ideal for international students.</p>
                <h6><strong>Masters in Australia</strong></h6>
                <p>Typically completed within 1-2 years, Master’s programs in Australia deliver intensive learning across varied fields, including Arts, Business, IT, and more </p>

           
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>Top Australian Universities </h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Melbourne  </h5>
                    <p>Renowned for Law and Psychology (QS Rank: 14)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >University of Sydney  </h5>
                    <p>Known for Arts, Social Sciences, and Architecture (QS Rank: 19)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of New South Wales  </h5>
                    <p>Mining & Medical Specializations (QS Rank: 19) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Monash University  </h5>
                    <p>Expertise in Arts and Humanities (QS Rank: 42) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Queensland </h5>
                    <p>Engineering Leader (QS Rank: 43)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Western Australia  </h5>
                    <p> Focus on Agriculture (QS Rank: 72)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">University of Adelaide   </h5>
                    <p> Noted for Health Sciences (QS Rank: 89) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Technology Sydney  </h5>
                    <p>Strong in Nursing, Sports, and Management (QS Rank: 90)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	RMIT University  </h5>
                    <p> Premier in Art, Design, and Architecture (QS Rank: 140)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary ">	Bond University    </h5>
                    <p>Popular for Sciences (QS Rank: 567) </p>
                </div>
            </div>
          
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Australia </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses</strong></h6>
                    <p>Students pursue high-demand courses such as IT, Data Science, Engineering, Biotechnology, Nursing, Business Management, and Hospitality</p>
                    <h6><strong>Scholarships in Australia</strong></h6>
                    <p>Many universities offer scholarships up to 100% based on merit. Eligible students may receive up to a 25% tuition reduction. The Australian government’s Destination Australia Program offers scholarships for those studying in regional areas. </p>
                    <h6><strong>Career Prospects </strong></h6>
                    <p>Australia presents career pathways in Engineering, Digital Services, IT, Education, Mining, Agribusiness, and Healthcare </p>
 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Tuition Fees </strong></h6>
                    <p><span class="text-primary">Diplomas & Certificates: </span>AUD 18,000 - 24,000</p>
                    <p><span class="text-primary">Bachelors: </span>AUD 18,000 - 45,000</p>
                    <p><span class="text-primary">Masters: </span>AUD 25,000 - 55,000</p>
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Annual Average: </span>AUD 29,710</p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">On-campus: </span>AUD 360 - 1,170</p>
                    <p><span class="text-primary">Off-campus: </span>AUD 1,460 - 1,760</p>
                    <p><span class="text-primary">Hostel/Homestay: </span>AUD 360 - 600</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section -->

<!-- Career Prospects and Visa Documents Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Career Prospects Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i> Required Documentation for Visa</h4>
                        <ul class="text-start">
                            <li>Confirmation of Enrollment (CoE)</li>
                            <li>Student Visa Application</li>
                            <li>Academic Records & Transcripts</li>
                            <li>Statement of Purpose & Letters of Recommendation</li>
                            <li>English Proficiency Scores (IELTS, TOEFL, or PTE)</li>
                            <li>Passport & Visa Fees</li>
                            <li>Financial Proof</li>
                            <li>Overseas Student Health Cover (OSHC)</li>
                            <li>Genuine Student (GS) Declaration</li>
                            <li>Relevant work experience is required for applicants with educational gaps.</li>
                            <li>Visa Processing Time: 2-6 weeks</li>	

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
