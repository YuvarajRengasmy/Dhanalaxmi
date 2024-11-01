@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Germany: Study in the Land of Ideas </h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.studying-in-germany.org/wp-content/uploads/2013/01/semester-abroad-in-germany.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>400 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>	€10k-€20k  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>400K </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>1.5 Years Post-Study </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Germany?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>International Exposure </strong></h6>
                <p>Immerse yourself in a diverse community. Over 250,000 international students flock to Germany each year, creating a rich tapestry of cultures and perspectives</p>
                <h6><strong>Quality Education</strong></h6>
                <p>Benefit from a long-standing tradition of academic excellence. German universities, dating back to the 14th century, are renowned for their rigorous programs and cutting-edge research.</p>
                <h6><strong>Diverse Programs</strong> </h6>
                <p>Pursue your passion! With over 300 international degree programs offered in English, explore diverse fields like Engineering, Natural Sciences, Computer Science, and Business Administration</p>
                <h6><strong>Economic Powerhouse</strong></h6>
                <p>Gain an edge in the global job market. Germany is a major player, offering incredible internship opportunities with industry giants like SAP, Siemens, and BMW.</p>
                <h6><strong>Practical Experience</strong></h6>
                <p>Bridge the gap between theory and practice. German universities integrate real-world experiences into their curriculum, propelling you towards a successful career</p>
                <h6><strong>Affordable Education</strong></h6>
                <p>Enjoy excellent value for your money. Unlike many destinations, German universities are state-funded, keeping tuition fees remarkably low. </p>
                <h6><strong>Central European Location</strong></h6>
                <p>Explore Europe with ease! Situated in the heart of the continent, Germany grants you a gateway to iconic destinations like London, Paris, and Rome. </p>
  
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>Top Universities in Germany</h2>
        <div class="row">
           <p>Dubai stands out as a premier destination for international students seeking prestigious education. Here are some top universities where we have successfully placed students:
            </p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Technical University of Munich (TUM)  </h5>
                    <p>A leader in Computer Science (QS World Ranking: 37)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" > Ludwig Maximilian University Munich </h5>
                    <p>Renowned for Data Science (QS World Ranking: 54)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Heidelberg University</h5>
                    <p> Prestigious Law School (QS World Ranking: 87) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Freie Universität Berlin </h5>
                    <p>Center for Archaeology (QS World Ranking: 98)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Karlsruhe Institute of Technology (KIT)    </h5>
                    <p>Premier choice for Biomedical Engineering (QS World Ranking: 102) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	RWTH Aachen University  </h5>
                    <p>World-class Mechanical Engineering program (QS World Ranking: 106)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Germany </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Dubai </strong></h6>
<p><ul>
    <li>Data Science</li>
    <li>Business Administration</li>
    <li>Engineering</li>
    <li>Computer Science</li>
    <li>Automotive Engineering</li>
    <li>Renewable Energy</li>
    
</ul></p>

	


                    <h6><strong>Scholarships in Germany</strong></h6>
                    <p> Scholarships for private institutions in Germany typically cover 10% to 30% of tuition fees. As one of India's premier consultancy firms for education in Germany, comprehensive information about available scholarships is at your disposal. You can explore organizations that offer scholarships, such as DAAD, on the following websites:                        </p>
                   
                    <p><a href="www.daad.de">1.www.daad.de</a></p>
	<p> <a href="www.campus-germany.de">2. www.campus-germany.de</a></p>
	<p> <a href="newdelhi.daad.de">3. http://newdelhi.daad.de</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees</strong></h6>
                <p>The expenses associated with studying in Germany for international students can vary based on several factors, including the institution, program, location, and funding opportunities. Additionally, living costs, such as rent, utilities, and leisure activities, play a significant role in the overall budget.</p>
                   
                    <p><span class="text-primary">	Bachelor’s Programs: </span>€8,000 - €10,000 </p>
                    <p><span class="text-primary">	Bachelor's Programs at Private Universities: </span> €10,000 - €12,000 </p>
             
                 
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Average per Annum: Approx. </span>€10,000</p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">Student Dormitories: </span>€180 - €330 </p>
                    <p><span class="text-primary">Private Housing: </span>€400 - €600 </p>
                    <h6><strong>Career Prospects in Germany </strong>  </h6>
                    <p>Germany's job market is replete with opportunities across various sectors. Key industries currently offering employment prospects include </p>
                    <p><spen><span class="text-danger" >	1. Computer Science , </span><span class="text-danger" >	2. Automotive Engineering , </span><spen class="text-danger"> 3. Engineering</spen> </p>
                    <p><spen><span class="text-danger" >	4. Business Management , </span><span class="text-danger" >	5. Data Science , </span><spen class="text-danger"> 6. Mechanical Engineering</spen> </p>

                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Documents Required for Study Visa in Germany                            </h4>
                        <ul class="text-start">
                            <li>Valid Passport</li>
                            <li>1 Copy of Passport’s Data Page</li>
                            <li>3 Biometric Passport Pictures</li>
                            <li>Cover Letter Explaining Purpose and Duration of Stay</li>
                            <li>Admission Letter from German University</li>
                            <li>Proof of Tuition Fee Payment (if applicable)</li>
                            <li>Proof of Language Proficiency (English and/or German, if course is taught in German)</li>
                            <li>Proof of Financial Means to Cover Study Costs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Germany Study Visa Process  </h4>
</p> <ul class="text-start">                   
                            <li>Apply at least six months before your intended start date.</li>
                            <li>Obtain an Academic Evaluation from APS.</li>
                            <li>Processing time for the offer letter typically ranges from 2-3 weeks, varying by university.</li>
                            <li>Pay tuition fees for the first year upon receiving the offer letter.</li>
                            <li>Set aside funds for living expenses in a Block Account</li>
                            <li>Purchase Travel and Health Insurance.</li>
                            <li>Apply for a visa online, submit the application form, passport, supporting documents, and 3 passport-sized photos at the VFS, and complete biometrics as per your appointment. </li>
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
