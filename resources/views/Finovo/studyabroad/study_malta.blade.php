@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Malta: Your Mediterranean Classroom </h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.global-business-school.org/sites/default/files/10-reasons-to-study-malta.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>5</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p> EUR 6,000 - 15,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>10,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>Post-Study 1 Years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Malta?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Affordable and Quality Education </strong></h6>
                <p>Malta’s universities offer world-class education at a fraction of the cost of many Western institutions. Financial aid and scholarship options help ease the cost further, making Malta an attractive option for affordable education. </p>
                <h6><strong>Great Career Opportunities</strong></h6>
                <p>International students can work part-time while studying and may qualify for a post-study work visa if they meet specific criteria, enabling valuable work experience in a European job market</p>
                <h6><strong>Streamlined Visa Process</strong> </h6>
                <p>Malta has a straightforward visa application process for international students, making it easier to start your education journey.</p>
                <h6><strong>Globally Recognized Degrees</strong></h6>
                <p>Degrees from Maltese institutions are respected worldwide, giving students the credentials to pursue global career opportunities.</p>
                <h6><strong>Rich Cultural Heritage</strong></h6>
                <p>A blend of Mediterranean cultures, Malta offers a welcoming and diverse environment that enriches students’ lives both academically and personally.</p>
                <h6><strong>Stunning Coastal Scenery </strong></h6>
                <p>With its Mediterranean beaches and historic landmarks, Malta is an ideal place to study and explore</p>
                
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in Malta  </h2>
        <div class="row">
           <p>Malta is a preferred choice for students seeking high-quality education in Europe. Here are some reputable universities</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Malta </h5>
                    <p>Popular for Humanities, Medicine, and Science (QS World Ranking: 801-1000)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >American University of Malta</h5>
                    <p>Popular: Business, Engineering, IT <spen>Accreditation: American and Maltese recognized</spen></p>
                    
                </div>
            </div>
           
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Malta</h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Mauritius  </strong></h6>
                    <p>Malta’s educational institutions are gaining global attention for their diverse programs. Some of the popular study areas include</p>
<p><ul>
    <li>Business Administration</li>
    <li>Engineering</li>
    <li>Environmental Science</li>
    <li>IT and Computer Science</li>
    <li>Hospitality and Tourism Management</li>
</ul></p>

	


                    <h6><strong>Scholarships in Malta </strong></h6>
                    <p>International students can apply for a range of scholarships in Malta, including</p>
<p><ul>
    <li>Government Scholarships</li>
    <li>University Scholarships</li>
    <li>EU-funded Scholarships</li>
    <li>Private Sector Scholarships</li>
</ul></p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees: Average per year </strong></h6>
                <p>The cost of studying in Malta varies depending on the university, program, and living arrangements. Here’s an estimated breakdown: </p>
                    <p><span class="text-primary">	Bachelors:   </span>EUR 6,000 - 10,000</p>
                    <p><span class="text-primary">	Masters:   </span> EUR 8,000 - 15,000  </p>
                 
                    <h6><strong>Living Expenses : Average Monthly Costs </strong> </h6>
                    <p><span class="text-primary">Rent </span>EUR 500 - 1,200</p>
                    <p><span class="text-primary">Utilities </span>EUR 60 - 100 </p>
                    <p><span class="text-primary">Public Transportn </span>EUR 26 onwards </p>    
                  
                    <h6><strong>Career Opportunities in Malta</strong></h6>
<p>Malta’s growing economy provides opportunities in various sectors. Popular industries for graduates include</p> 
<p>
    <spen class="text-danger">1. Financial Services ,</spen>
    <spen class="text-danger">2. Tourism and Hospitality ,</spen>
    <spen class="text-danger">3. Information Technology ,</spen>
    <spen class="text-danger">4. Gaming and Digital Media ,</spen>
    <spen class="text-danger">5. Education and Research</spen>
</p>
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
                            <p>To study in Malta, you’ll need the following documents</p>
                        <ul class="text-start">
                           
                            <li>Application form</li>
                            <li>Proof of language proficiency (e.g., IELTS, TOEFL)</li>
                            <li>Educational transcripts</li>
                            <li>Passport and ID</li>
                            <li>Health insurance</li> 
                            <li>Financial proof</li>
                            <li>Statement of Purpose</li> 
                            <li>Letter of Recommendation</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Malta Study Visa Process  </h4>
                            <p>Steps for acquiring a student visa in Malta:</p>
                             <ul class="text-start">                   
                            <li>Complete and submit the application form.</li>
                            <li>Show proof of accommodation and sufficient funds.</li>
                            <li>Submit passport photos.</li>
                            <li>Provide an offer letter from the university.</li>
                            <li>Visa Processing Time: Typically 3-4 weeks.</li>
                            
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
