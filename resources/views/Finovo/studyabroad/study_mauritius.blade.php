@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Enlightening educational journey in Mauritius </h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://abcstudylinks.com/wp-content/uploads/2023/11/GettyImages-1205111263-RS.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>9 Renowned  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p> MUR 25,000 - 30,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>3,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>Post-Study 3 Years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Mauritius?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Affordable Education</strong></h6>
                <p>Mauritian universities offer tuition fees that are notably lower than those in many Western countries. Moreover, various scholarships and financial aid programs further alleviate the financial strain, making education accessible to more students.                </p>
                <h6><strong>Enhanced Job Prospects</strong></h6>
                <p>International students can work during their studies and are eligible for post-study employment, provided they meet the necessary criteria. This not only helps students gain invaluable experience but also paves the way for future career opportunities. </p>
                <h6><strong>Streamlined Visa Process</strong> </h6>
                <p>The application and visa processes for studying in Mauritius are designed to be straightforward, ensuring a hassle-free experience for international students</p>
                <h6><strong>Globally Recognized Qualifications</strong></h6>
                <p>The academic programs offered in Mauritius are accredited and hold international recognition. Graduates can confidently present their degrees as respected qualifications worldwide.</p>
                <h6><strong>Cultural Diversity</strong></h6>
                <p>Mauritius stands out as a vibrant tapestry of cultures, providing students with an enriching environment and the chance to meet friendly people from various backgrounds </p>
                <h6><strong>Stunning Natural Beauty </strong></h6>
                <p>With its tropical climate, breathtaking beaches, and lush greenery, Mauritius is not just a beautiful place to study but also an inspiring one </p>
                
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in Mauritius</h2>
        <div class="row">
           <p>Mauritius is an excellent destination for international students aiming for a prestigious education. Here are some prominent universities where students have successfully enrolled</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Amity Global Business School </h5>
                    <p>Specialization: Science (QS World Ranking: 1001-1200) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Middlesex University:Specialization</h5>
                    <p>IT and Business Management (QS World Ranking: 721-730)</p>
                </div>
            </div>
           
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Mauritius </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Mauritius  </strong></h6>
                    <p>Mauritius is gaining recognition as a prime study abroad destination. Here are some of the most sought-after programs</p>
<p><ul>
    <li>Tourism Administration</li>
    <li>Psychology</li>
    <li>Information Technology</li>
    <li>MBA</li>
    <li>Marketing</li>
    <li>Finance</li>
</ul></p>

	


                    <h6><strong>Scholarships in Mauritius</strong></h6>
                    <p> Indian students exploring educational opportunities in Mauritius have access to various scholarship options, including</p>
<p><ul>
    <li>Government Scholarships</li>
    <li>University Scholarships</li>
    <li>Private Scholarships</li>
    <li>Scholarships from International Organizations</li>
</ul></p>
                   
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees: Average Annual Costs</strong></h6>
                <p>The expenses associated with studying in Mauritius vary based on multiple factors, including the chosen institution, program of study, and location. Additionally, living expenses like rent, utilities, and recreational activities significantly influence the overall cost.
                </p>
                    <p><span class="text-primary">	Bachelors:   </span>MUR 150,000 - 350,000 </p>
                    <p><span class="text-primary">	Masters:   </span> MUR 130,000 - 600,000 </p>
                 
                    <h6><strong>Living Expenses : Average Monthly Costs </strong> </h6>
                    <p><span class="text-primary">Rent </span>MUR 11,910 - 19,850</p>
                    <p><span class="text-primary">Utilities </span>MUR 150 - 1,500 </p>
                    <p><span class="text-primary">Transportation: Starting from </span>MUR 4,000 </p>    
                  
                    <h6><strong>Career Opportunities in Mauritius </strong>  </h6>
                    <p>Mauritius boasts a diverse job market, offering numerous prospects across various sectors. Some of the promising industries for graduates include</p>
                    <p><spen><span class="text-danger" >	1. Tourism , </span><span class="text-danger" >	2. Hospitality , </span><spen class="text-danger"> 3. Financial Services</spen> </p>
                    <p><spen><span class="text-danger" >	4. Information Technology , </span><span class="text-danger" >	5. Manufacturing , </span><spen class="text-danger">Renewable Energy </spen></p>
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Visa Requirements </h4>
                        <ul class="text-start">
                            <li>To study in Mauritius, you will need the following documents </li>
                            <li>Application form</li>
                            <li>Proof of language proficiency</li>
                            <li>Valid passport</li>
                            <li>Health insurance</li>
                            <li>Financial documents</li> 
                            <li>Statement of Purpose</li>
                            <li>Letters of Recommendation</li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Mauritius Study Visa Process </h4>
                            <p>To obtain a student visa </p>
                             <ul class="text-start">                   
                            <li>Submit a completed application form.</li>
                            <li>Provide accommodation details.</li>
                            <li>Present a bank statement (approx. MUR 100,000 or INR 2 lakhs).</li>
                            <li>Include four passport-sized photos.</li>
                            <li>Photocopy of the biodata pages of your passport.</li>
                            <li>Offer letter with course specifics.</li>    
                        </ul>	
                        <p><spen class="text-danger">Visa Processing Time :</spen>  Approximately 4 weeks from submission</p>
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
