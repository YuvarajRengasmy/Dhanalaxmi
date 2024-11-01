@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Your Gateway to a Brighter Future</h2>
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


<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-university card-icon"></i>
                    <div class="card-body">
                        <h4>Universities</h4>
                        <p>590 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>MYR 25,000 - 73,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>120,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>0.5 - 5 years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Malaysia? </h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Affordable Cost of Studying </strong></h6>
                <p>International students will find that Malaysia offers a remarkably economical education compared to other nations. This affordability makes pursuing higher education more accessible and realistic</p>
                <h6><strong>Safe and Welcoming Environment </strong></h6>
                <p>Renowned for its hospitality, Malaysia provides an inviting atmosphere, ensuring that international students feel safe and welcome during their studies.</p>
                <h6><strong>Tropically Balanced Climate</strong> </h6>
                <p>Boasting a tropical climate, Malaysia remains an appealing destination for students year-round, with a delightful balance of rainfall and sunshine.</p>
                <h6><strong>Unique Cultural Experience</strong></h6>
                <p>The country's rich tapestry of multicultural influences offers international students an unparalleled chance to immerse themselves in a vibrant array of Asian cultures, broadening their personal experiences and perspectives.</p>
                <h6><strong>Top-Notch Education</strong></h6>
                <p>Malaysian universities deliver accredited programs that enjoy global recognition, ensuring that international students receive a quality education that is valued worldwide</p>
                <h6><strong>Strategic Location</strong></h6>
                <p>Situated in the Asia-Pacific region, Malaysia serves as a strategic gateway to diverse markets. This advantageous positioning means ample job opportunities and a highly regarded international perspective for graduates</p>
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in Malaysia </h2>
        <div class="row">
           <p>Malaysia is a premier choice for international students seeking a prestigious education. Here are some top universities where successful placements have occurred</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Malaya (UM):  </h5>
                    <p>Notable for Engineering, Business (QS Ranking: 59)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Universiti Putra Malaysia (UPM):  </h5>
                    <p>Notable for: Agriculture, Veterinary Science (QS Ranking: 132) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Universiti Kebangsaan Malaysia (UKM): </h5>
                    <p>Notable for Medicine, Health Sciences (QS Ranking: 141)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Monash University Malaysia:   </h5>
                    <p>Notable for Business, Engineering (QS Ranking: 57) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Nottingham Malaysia:    </h5>
                    <p>Notable for: Law, Business (QS Ranking: 103)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Malaysia </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Malaysia</strong></h6>
<p>Malaysia attracts students globally, offering a plethora of highly sought-after programs, including</p>
<p><ul>
    <li>Business Management</li>
    <li>IT and Computer Science</li>
    <li>Engineering</li>
    <li>Hospitality and Tourism</li>
    <li>Medicine</li>
    <li>Accounting</li>
</ul></p>

                    <h6><strong>Scholarships in Malaysia</strong></h6>
                    <p> Both the government of Malaysia and private institutions offer a variety of scholarships for international students, such as</p>
                    <h6><strong>Malaysian International Scholarship (MIS)</strong></h6>
                    <p>Awarded to students with outstanding academic achievements and leadership skills, aiming to contribute to their home country after their studies </p>
                    <h6><strong>Malaysian Technical Cooperation Programme (MTCP) </strong></h6>
                    <p>Supports students from developing countries in pursuing higher education, fostering technical cooperation and human resource development.</p>
                    <h6><strong>ASEAN Scholarships for Postgraduate Studies </strong></h6>
                    <p>Available to citizens of ASEAN member countries, covering tuition, living expenses, and airfare for various subjects, with durations of up to two years for Masters and three years for Doctoral programs </p>
 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees</strong></h6>
                <p>The expenses associated with studying in Malaysia for international students vary based on several factors, including the institution, program of study, location, and funding opportunities. Living expenses, such as rent, utilities, and recreational activities, are also crucial components of the overall cost.</p>
                   
                    <p><span class="text-primary">	Bachelor’s Programs: </span> MYR 25,000 - 73,000 </p>
                    <p><span class="text-primary">	Bachelor's Programs at Private Universities: </span> MYR 25,176 - MYR 32,042 </p>
                    <p><span class="text-primary">	Master’s Programs </span>MYR 27,000 - 47,000</p>
                    <p><span class="text-primary">	Master's Programs at Private Universities </span>MYR 27,000 - MYR 35,678.37 </p>
                 
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Average per Annum: Approx. </span>MYR 18,000</p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">On-campus: </span>MYR 200 - 600</p>
                    <p><span class="text-primary">Off-campus: </span>MYR 500 - 1,500 </p>
                    <p><span class="text-primary">Homestay: </span>MYR 800 - 1,200</p>
                    <h6><strong>Career Prospects in Malaysia</strong></h6>
                <p>The Malaysian job market is diverse, presenting opportunities across multiple sectors, including</p>
                   
                    <p><span class="text-danger" >	1. Healthcare , </span><span class="text-danger" >	2. Biotechnology , </span><spen class="text-danger"> 3. Information Technology</spen> </p>
                    <p><span class="text-danger">	4.Engineering , </span><span class="text-danger" >	5. Education and Training , </span ><spen class="text-danger" >6. Oil and Gas Industry </spen></p>
                    <p><span class="text-danger" >7. Finance and Banking </span></p>
                 


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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Documents Required to Study in Malaysia</h4>
                            <p>International students must prepare several documents for admission and visa purposes, with requirements varying by institution and program. Commonly needed documents include:</p>
                        <ul class="text-start">
                            <li>Passport</li>
                            <li>Letter of Acceptance</li>
                            <li>Academic Transcripts and Certificates</li>
                            <li>English Language Proficiency Report</li>
                            <li>Health Examination Report</li>
                            <li>Financial Documents</li>
                            <li>Visa Application Form</li>
                            <li>Study Plan or Statement of Purpose</li>
                            <li>Two Passport-Sized Photographs</li>
                            <li>Additional Documents if Required</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Malaysia Study Visa Process</h4>
<p>The application process for a Malaysian student visa is handled through educational institutions. The immigration department manages the processing and issuance of student passes and visas. Students will receive application status updates within seven days, regardless of the outcome. Required documents include:
</p> <ul class="text-start">                   
                            <li>Offer Letter or letter of acceptance from the institution</li>
                            <li>Student Pass application form IMM14 (in duplicate)</li>
                            <li>Personal Bond signed by the educational institution</li>
                            <li>Two Passport-Sized Photographs</li>
                            <li>Two photocopies of the student’s passport</li>
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
