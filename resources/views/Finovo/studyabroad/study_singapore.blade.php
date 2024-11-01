@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Singapore: The Gateway to Asia</h2>
        
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.studyabroad.com/sites/default/files/images/Singapore-Study-Abroad-Programs.jpg" alt="Visa Assistance" class="img-fluid">
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
                    <i class="fas fa-university card-icon"></i>
                    <div class="card-body">
                        <h4>Institutions</h4>
                        <p>40 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>SGD 10,000–20,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>65,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>Not Available </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Reasons to Study in Singapore</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Renowned Academic Institutions</strong></h6>
                <p>Singapore hosts world-class universities like the National University of Singapore (NUS) and Nanyang Technological University (NTU), known globally for their academic rigor and innovation in research.</p>
                <h6><strong>A Diverse and Inclusive Society</strong></h6>
                <p>Known for its multicultural environment, Singapore offers a unique blend of cultures, enriching student experiences and fostering global perspectives. </p>
                <h6><strong>Global Business Hub</strong> </h6>
                <p>As a leading global business center, Singapore provides excellent exposure to economic and financial sectors, ideal for students seeking an education that’s both globally respected and career-oriented</p>
                <h6><strong>Innovation and Research Opportunities </strong></h6>
                <p>Singapore places a strong emphasis on research and development. Many universities collaborate with industry leaders, giving students access to top-notch research facilities and pioneering projects. </p>
                <h6><strong>Career-Building Prospects</strong></h6>
                <p>With ample internship opportunities, students gain practical experience alongside academic learning. Additionally, public universities offer flexible part-time and certification courses, catering to working professionals looking to upgrade their skills</p>
                <h6><strong>No Mandatory IELTS Requirement</strong></h6>
                <p>Singapore does not require IELTS for many programs, including fields like management, nursing, and design, which simplifies the application process for international students. </p>
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>Top Universities in Singapore </h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	National University of Singapore (NUS): </h5>
                    <p>Notable for Petroleum Engineering (QS Ranking: 8) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >	Nanyang Technological University (NTU): </h5>
                    <p>Notable for Computer Science (QS Ranking: 26)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Curtin Singapore </h5>
                    <p>Notable for Supply Chain Management (QS Ranking: 183) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Singapore Management University (SMU):  </h5>
                    <p>Notable for Business Administration (QS Ranking: 545) </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Education Costs in Singapore </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses</strong></h6>
                    <p>Programs such as Business Management, Supply Chain, IT, Computer Science, Hospitality, Architecture, Art & Design attract global students.                    </p>
                    <h6><strong>Scholarships</strong></h6>
                    <p>Singapore’s Ministry of Education offers the MOE Tuition Grant, covering a substantial portion of tuition for eligible students who agree to work for a Singaporean company for three years post-graduation. Additional scholarships and bursaries vary by institution and cover up to 75% of tuition fees.</p>
                    <h6><strong>Career Prospects in Singapore </strong></h6>
                    <p>Singapore offers diverse career opportunities across sectors such as engineering, healthcare, banking, IT, and hospitality, ensuring that students from various disciplines can find paths that align with their aspirations </p>
 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Tuition Fees </strong></h6>
                    <p><span class="text-primary">	Bachelor’s Programs: </span> SGD 7,000–30,000 </p>
                    <p><span class="text-primary">	Master’s Programs </span>SGD 25,000–55,000</p>
                 
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Estimated Annual Cost:</span>SGD 18,000</p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">On-campus: </span>SGD 750–2,000</p>
                    <p><span class="text-primary">Off-campus: </span>SGD 1,500–2,500</p>
                    <p><span class="text-primary">Homestay: </span>SGD 1,000–2,500</p>
                   
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Visa and Required Documents </h4>
                        <ul class="text-start">
                            <li>Valid passport</li>
                            <li>Financial proof</li>
                            <li>Completed application form</li>
                            <li>ID and academic transcripts</li>
                            <li>English proficiency (optional)</li>
                            <li>Letters of recommendation</li>
                            <li>CV or resume</li>
                            <li>Health insurance</li>
                          
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Visa Process</h4>
                       <p>Upon receiving an unconditional offer, the university applies for the student visa on the applicant’s behalf. Required financial documentation and explanations for any education gaps may be needed, with processing typically taking 2-3 weeks.</p>
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
