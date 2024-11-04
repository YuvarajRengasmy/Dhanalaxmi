@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">France: A Premier Destination for Education, Arts, Culture, and Innovation</h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.einstroacademy.com/uploads/page/website-banner-ea-2022.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>100+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p> €3,000 - €10,000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>400,000+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>Post-Study 2 Years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in France?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>An Epicenter of Academic Brilliance </strong></h6>
                <p>France is celebrated for its prestigious Grande École institutions, drawing ambitious scholars and professionals from across the globe. With programs renowned for excellence and world-class career opportunities, studying in France is an invitation to thrive in both academics and industry </p>
                <h6><strong>Affordable Living in an Enchanting Locale</strong></h6>
                <p>France’s cost of living is generally lower than other major European cities. The government also provides substantial support for students, often covering up to a third of their accommodation costs, making it a more accessible choice than the UK. </p>
                <h6><strong>Bilingual Opportunities – French as a Plus, Not a Must</strong> </h6>
                <p>English is now widely used in French universities, especially in fields like business, engineering, and political science. Many institutions offer French as a supplementary course to aid in daily interactions and broaden career options. </p>
                <h6><strong>Cultural Wealth and Artistic Legacy</strong></h6>
                <p>France’s fusion of tradition and modernity offers a captivating blend of art, culture, and history. With iconic sites and masterpieces like those of Monet, and the Mona Lisa, it’s a culturally rich backdrop for academic pursuits.</p>
                <h6><strong>Cutting-Edge Science and Technology </strong></h6>
                <p>France is a trailblazer in technological advancements, particularly in information technology, ranking second in Europe and fourth globally. Its universities are known for groundbreaking research and innovative programs.</p>
               
                
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>Top Universities in France </h2>
        <div class="row">
           <p>France’s academic institutions are highly regarded, and international students are drawn to their excellence. Here are some prominent universities where students have found success</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Universite PSL - Physics  </h5>
                    <p>(QS World Ranking: 24) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Institut Polytechnique de Paris </h5>
                    <p>Artificial Intelligence (QS World Ranking: 38)
                    </p>
                    
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Sorbonne University </h5>
                    <p>International Law (QS World Ranking: 59)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Universite Paris-Saclay  </h5>
                    <p>Mathematics (QS World Ranking: 71)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Ecole Normale Superieure de Lyon  </h5>
                    <p>Cognitive Sciences (QS World Ranking: 184)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >Ecole des Ponts ParisTech  </h5>
                    <p>Civil Engineering (QS World Ranking: 192)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in France </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Preferred Courses in France </strong></h6>
                    <p>France is celebrated for offering specialized programs across a multitude of fields. Popular courses include</p>
<p><ul>
    <li>MBA</li>
    <li>Engineering</li>
    <li>Hospitality & Tourism</li>
    <li>Information Technology</li>
    <li>Fashion</li>
    <li>Culinary Arts</li>
</ul></p>
                    <h6><strong>Scholarships in France</strong></h6>
                    <p>The French government sponsors around 22,000 international students each year, with most scholarships provided under the Ministry of Foreign Affairs. Notably, over 80% of French government scholarships cater to international students. Special scholarship programs attract exceptional global talent to France’s educational institutions.</p>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees: Average per year </strong></h6>
                <p>The expenses for studying in France vary by institution, program, and lifestyle. Here’s an overview</p>
                    <p><span class="text-primary">	MBA:   </span>€16,000 - €25,000</p>
                    <p><span class="text-primary">	Masters:   </span> €10,000 - €16,500  </p>
                    <h6><strong>Living Expenses : Average Monthly Costs </strong> </h6>
                    <p><span class="text-primary">Approximately </span>€9,300</p>
                    <h6><strong>Accommodation Costs</strong>  </h6>
                    <p><span class="text-primary">Student Residences: </span>€500 - €700/month </p>
                    <p><span class="text-primary">	Private Apartments and Shared Apartments: </span>€600 - €1,500/month </p>
                    <p><span class="text-primary">University Residences (CROUS) </span>€780 - €800/month </p>
                    <p><span class="text-primary">Studapart: </span>€700 - €1,000/month </p>
                  
                  
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Career Prospects in France  </h4>
                            <p>France’s economy is diverse, providing a wealth of opportunities in sectors such as  </p>
                        <ul class="text-start">
                            <li>Engineering</li>
                            <li>Healthcare</li>
                            <li>Financial Services</li>
                            <li>Fashion & Luxury Goods</li>
                            <li>Consulting</li> 
                            <li>Creative Design</li>
                        </ul>
                        <h6><strong>Visa Process for Studying in France </strong></h6>
                        <p>France has a streamlined visa process. Begin with the Campus France application, followed by an interview to obtain the NOC before booking an appointment with the VFS. After submitting documents to the consulate, the visa is granted promptly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Essential Documents for Studying in France</h4>
                            <p>To study in France, international students require specific documentation, which varies based on the program and institution. Commonly required documents include  </p>
                             <ul class="text-start">                   
                            <li>Application form.</li>
                            <li>Proof of identity.</li>
                            <li>Educational records (transcripts, diplomas).</li>
                            <li>Bachelor’s degree (if pursuing a master’s program).</li>
                            <li>Language proficiency scores (e.g., TOEFL, IELTS).</li>
                            <li>Statement of Purpose</li>
                            <li>Curriculum Vitae (CV) or resume.</li>
                            <li>Letters of recommendation.</li>
                            <li>Financial documents.</li>
                            <li>Visa documents.</li>
                            <li>Health insurance.</li>
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
