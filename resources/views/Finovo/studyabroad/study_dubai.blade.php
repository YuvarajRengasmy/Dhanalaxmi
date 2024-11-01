@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Dubai: Discover a Unique Fusion of Innovation and Luxury</h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.globalreach.in/images/destinations/inner-page/dubai.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>27 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>AED 37k - 85k </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>77K </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>Post-Study Available</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Study in Dubai? </h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>International Exposure</strong></h6>
                <p>The UAE is a melting pot of over 200 nationalities, cohabitating in harmony and enriching one another’s cultures. This dynamic blend has transformed the UAE into a vibrant hub characterized by diverse traditions, a booming business environment, and a rich tapestry of multiculturalism, multi-religiosity, and multilingualism</p>
                <h6><strong>Excellent Education System</strong></h6>
                <p>Dubai’s universities are renowned for their high standards and diverse offerings. They focus on fostering innovation and excellence, providing an extensive array of educational programs. Studying in Dubai is not only affordable but also increasingly appealing to students from India.</p>
                <h6><strong>Work Opportunities</strong> </h6>
                <p>University programs here hold global recognition, attracting many Indian students due to excellent job prospects. Dubai, particularly as a financial powerhouse in the lucrative oil sector, offers access to some of the highest-paying positions available.</p>
                <h6><strong>Innovation and Entrepreneurship Centers</strong></h6>
                <p>Studying in the UAE allows you to delve into cutting-edge technology through Innovation and Entrepreneurship Centers located at various universities. The UAE has established numerous free trade zones designed to nurture innovative technologies, creating ideal avenues for internships and work placements.</p>
                <h6><strong>Safety</strong></h6>
                <p>According to 2021 data from Global Finance, the UAE ranks as the second safest country globally out of 134 nations. Factors such as peace, personal security, and vulnerability to natural disasters were analyzed. For study-abroad students, safety is paramount in ensuring a smooth academic journey.</p>
                </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Universities in Dubai</h2>
        <div class="row">
           <p>Dubai stands out as a premier destination for international students seeking prestigious education. Here are some top universities where we have successfully placed students:
            </p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Abu Dhabi University  </h5>
                    <p>Renowned for Business and Economics (QS World Ranking: 580)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >De Montfort University  </h5>
                    <p>Known for Business Management (QS World Ranking: 801-1000) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	EM Normandie </h5>
                    <p> Specializes in Masters in Management (QS World Ranking: 111-120) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Heriot-Watt University   </h5>
                    <p>Offers programs in Business and Science (QS World Ranking: 235) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Istituto Marangoni    </h5>
                    <p>Celebrated for Fashion Design (QS World Ranking: 51-100) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">Curtin University  </h5>
                    <p>Well-regarded for Engineering (QS World Ranking: 183)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Dubai</h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Dubai </strong></h6>
<p>Malaysia attracts students globally, offering a plethora of highly sought-after programs, includingStudying in Dubai opens up numerous pathways for international students pursuing a global education. Some of the most sought-after courses include:</p>
<p><ul>
    <li>MBA</li>
    <li>Accounts</li>
    <li>Engineering</li>
    <li>Tourism</li>
    <li>Finance</li>
    <li>Hospitality</li>
    <li>Architecture</li>
    <li>Aviation</li>
</ul></p>

                    <h6><strong>Scholarships in Dubai</strong></h6>
                    <p> Dubai, the shimmering jewel of the Middle East, offers a plethora of scholarship opportunities for aspiring scholars. Among these are merit-based scholarships that can cover up to 40% of tuition fees. For more information on scholarships in the UAE for Indian students, visit:</p>
                    <h6><strong>UAE Scholarships</strong></h6>
                    <p>1. Mohammed Bin Rashid School of Government</p>
	<p>2. American University in Dubai</p>
	<p>3. UAE Scholarships 2023</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees</strong></h6>
                <p>The cost of studying in Dubai for international students is influenced by various factors, including the institution, program of study, location, and funding opportunities. Additionally, living expenses such as rent and recreational activities contribute significantly to the overall cost.</p>
                   
                    <p><span class="text-primary">	Bachelor’s Programs: </span> AED 37,000 - 115,000 </p>
                    <p><span class="text-primary">	Bachelor's Programs at Private Universities: </span> AED 48,000 - 135,000 </p>
             
                 
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Average per Annum: Approx. </span>AED 48,000</p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">On-campus: </span>AED 3,000 - 5,000</p>
                    <p><span class="text-primary">Off-campus: </span>AED 1,200 - 3,500 </p>
                    <p><span class="text-primary">Homestay: </span>AED 2,000 - 6,000</p>
                    


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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Career Prospects in Dubai</h4>
                            <p>The job market in Dubai is multifaceted, offering opportunities across a spectrum of sectors. Key industries currently hiring include:</p>
                        <ul class="text-start">
                            <li>Technologyt</li>
                            <li>IT</li>
                            <li>Media</li>
                            <li>Communication</li>
                            <li>Financial Services</li>
                            <li>Healthcare</li>
                            <li>Construction</li>
                            <li>Engineering</li>
                            <li>Hospitality</li>
                            <li>Tourism</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Documents Required for Study in Dubai                            </h4>
</p> <ul class="text-start">                   
                            <li>Passport photocopy</li>
                            <li>Statement of Purpose</li>
                            <li>Resume</li>
                            <li>Degree/Provisional Certificate</li>
                            <li>Offer Letter from College</li>
                            <li>Two Letters of Recommendation</li>
                            <li>Academic Transcripts (Grade 10 to most recent qualification)</li>
                        </ul>	
                        <h6><strong>Dubai Study Visa Process</strong></h6>
                        <p>Students can apply 60 days prior to their intended study period. All documents must be submitted in duplicate, including an unconditional offer letter and visa fee receipt.</p>   
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
