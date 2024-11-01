@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Ukraine: Experience World-Class Education with Affordable Fees </h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://iseusa.org/wp-content/uploads/ukrainian_scholarship_1920w.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>200+ </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>	C$5,000 - C$15,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>1 million</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>1-3 years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Ukraine?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Quality Education</strong></h6>
                <p>Ukraine boasts a rich educational heritage with numerous institutions recognized globally. Many universities offer programs in English, making it accessible for international students.</p>
                <h6><strong>Globally Recognized Degrees </strong></h6>
                <p>Ukrainian universities provide comprehensive academic programs and research initiatives that pave the way for international career prospects and esteemed academic accolades.                .</p>
                <h6><strong>Post-Study Work Opportunities </strong> </h6>
                <p>After completing their studies, international students may apply for work permits lasting up to three years, enabling them to gain essential professional experience</p>
                <h6><strong>Work Hours</strong></h6>
                <p>Students can work 20 hours per week during academic sessions and full-time during vacations, allowing them to earn and gain valuable work experience.                </p>
                <h6><strong>Pathway to Permanent Residency</strong></h6>
                <p>International students who choose to study in Ukraine are eligible for post-study work permits, facilitating their transition to permanent residency. Various immigration programs are available, making it an attractive choice for global students.                </p>
                <h6><strong>Safe Study Environment </strong></h6>
                <p>Ukraine is renowned for its welcoming atmosphere and diverse culture, making it an ideal destination for international students to study and thrive </p>
                
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in Ukraine  </h2>
        <div class="row">
           <p>Ukraine is a sought-after destination for international students pursuing a prestigious education. Here are some notable universities where students have successfully enrolled:</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Taras Shevchenko National University of Kyiv  </h5>
                    <p>Popular for Law (QS World Ranking: 500-600) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" > 	Lviv Polytechnic National University </h5>
                    <p>Popular for Engineering (QS World Ranking: 701-750)  </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Kharkiv National University of Radioelectronics</h5>
                    <p>Popular for Computer Science (QS World Ranking: 1001+) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Odesa National Medical University </h5>
                    <p>Popular for Medicine (QS World Ranking: 1001+) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Sumy State University   </h5>
                    <p>Popular for Economics (QS World Ranking: 1001+) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">National University of Kyiv-Mohyla Academy  </h5>
                    <p> Popular for Social Sciences (QS World Ranking: 801-1000) </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Ukraine</h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Ukraine </strong></h6>
                    <p>Ukraine offers a broad spectrum of sought-after courses across multiple disciplines. Here are some top courses favored by international students</p>
<p><ul>
    <li>Medicine</li>
    <li>Business Administration</li>
    <li>Engineering</li>
    <li>Computer Science</li>
    <li>Arts and Humanities</li>
</ul></p>

	


                    <h6><strong>Scholarships in Ukraine  </strong></h6>
                    <p> Numerous scholarships are available for international students excelling in their academic pursuits. Although these scholarships may not cover all expenses, they provide significant financial assistance for education and living costs. Applying for scholarships is competitive and often requires separate applications to each university. </p>
                    <h6><strong>Cooperative Work Programs </strong></h6>
                    <p>Co-op programs in Ukraine allow students to gain practical experience while studying, bridging the gap between education and employment. These full-time placements typically last 12 to 16 weeks, helping students forge connections in the Ukrainian job market. </p>
                   
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees :Average Annual Costs </strong></h6>
                <p>The expense of studying in Ukraine for international students varies based on several factors, including the university, program, and location. Living costs, encompassing accommodation and daily expenses, also contribute significantly to the overall budget.                </p>
                   
                    <p><span class="text-primary">	PG Diploma:  </span>C$5,000 - C$10,000 </p>
                    <p><span class="text-primary">	Bachelors:   </span> C$5,000 - C$15,000 </p>
                    <p><span class="text-primary">	Masters:   </span> C$6,000 - C$12,000  </p>
                 
                    <h6><strong>Living Expenses : Average Annual Costs </strong> </h6>
                    <p><span class="text-primary">Average per Annum:Estimated </span>C$5,000 - C$7,000
                    </p>
                    <h6><strong> Accommodation</strong>  </h6>
                    <p><span class="text-primary">	On-campus: </span>C$300 - C$500/month </p>
                    <p><span class="text-primary">	Off-campus rental </span>C$250 - C$400/month </p>
                    <p><span class="text-primary">	Homestay </span>C$500 - C$700/month </p>

                    <h6><strong>Career Prospects in Ukraine  </strong>  </h6>
                    <p>The job market in Ukraine is diverse, presenting opportunities across various sectors. Here are some key industries offering employment prospects  </p>
                    <p><spen><span class="text-danger" >	1. Engineering , </span><span class="text-danger" >	2. Information Technology , </span><spen class="text-danger"> 3. Finance and Banking</spen> </p>
                    <p><spen><span class="text-danger" >	4. Business Management , </span><span class="text-danger" >	5. Education , </span></p>
                    
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Documents Required for Student Visa  </h4>
                        <ul class="text-start">
                            <li>When applying to study in Ukraine, you'll typically need the following documents</li>
                            <li>Valid Passport</li>
                            <li>English proficiency scores (IELTS or TOEFL)</li>
                            <li>Academic transcripts for previous studies</li>
                            <li>Medical certificate (if applicable)</li>
                            <li>Updated CV</li>  
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Visa Application Process  </h4>
                            <p>To study in Ukraine, applying for a visa at least three months before your intended intake is recommended. Required documents include</p>
                             <ul class="text-start">                   
                            <li>Valid Passport.</li>
                            <li>Letter of Acceptance from the university.</li>
                            <li>Proof of English proficiency.</li>
                            <li>Tuition fee receipt.</li>
                            <li>Medical certificate (if necessary).</li>
                            <li>Statement of Purpose (SOP).</li>
                            <li>Visa Processing Time: Approximately 1-2 months  </li>
                        </ul>	
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
