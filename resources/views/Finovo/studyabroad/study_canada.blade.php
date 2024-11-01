@extends('layouts.main')

@section('meta_title', 'Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')

<!-- Banner Section -->
<div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt text-primary">Canada: Study at Prestigious Institutions in a Safe, Multicultural Environment</h2>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Free Expert Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.sangenbd.com/images/study-in-canada-from-bangladesh.jpg" alt="Visa Assistance" class="img-fluid">
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
                        <p>200 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-globe-americas card-icon"></i>
                    <div class="card-body">
                        <h4>Tuition Fees</h4>
                        <p>CAD 15k - CAD 28k</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-user-graduate card-icon"></i>
                    <div class="card-body">
                        <h4>Students</h4>
                        <p>1 Million International</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <i class="fas fa-briefcase card-icon"></i>
                    <div class="card-body">
                        <h4>Work Visa </h4>
                        <p>1 - 3 years </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section my-5" id="contact">
    <div class="container">
    <h2 class="text-center">Why Choose Canada for Your Studies?</h2>

        <div class="row">
            <div class="contact-content col-md-7">
            <h6><strong>Home to Four Top 100 Universities </strong></h6>
                <p>Canada boasts four universities that proudly feature in the global top 100 according to the QS World Rankings. These institutions are celebrated for their high academic standards and inclusive settings, which encourage both excellence in education and collaborative research. </p>
                <h6><strong>Globally Recognized Degrees </strong></h6>
                <p>Canadian universities provide exceptional academic programs and research opportunities, granting world-class education that paves the way for international career prospects and esteemed academic accolades</p>
                <h6><strong>Post-Study Work Opportunities</strong> </h6>
                <p>With post-study work permits extending up to three years, Canada allows international graduates to gain invaluable experience in the workforce following their studies.</p>
                <h6><strong>Work While You Study</strong></h6>
                <p>As a student in Canada, you have the chance to work up to 24 hours a week during your studies and full-time during vacations. This not only helps to offset your living costs but also enriches your experience with practical work exposure.</p>
                <h6><strong>Pathway to Permanent Residency </strong></h6>
                <p>Studying in Canada can be a gateway to applying for post-study work permits and, ultimately, permanent residency. Various immigration programs, including the Express Entry system, enhance Canada’s appeal as a study destination.</p>
                <h6><strong>A Safe Haven for Students</strong></h6>
                <p>Known for its welcoming and inclusive nature, Canada is a haven for international students seeking a safe environment to learn and grow.</p>
            </div>
            <div class="contact-form col-md-5">
                @include('components.generalenquiry')
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2>List of Top Universities in Canada </h2>
        <div class="row">
           <p>Canada is a prime destination for those seeking a prestigious education. Here’s a list of some renowned universities where students have successfully enrolled</p>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Toronto   </h5>
                    <p>(Computer Science - QS World Ranking 21) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary" >McGill University   </h5>
                    <p>(Biology - QS World Ranking 30)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of British Columbia  </h5>
                    <p>(Arts and Humanities - QS World Ranking 34)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Alberta   </h5>
                    <p>(Engineering - QS World Ranking 111)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Waterloo    </h5>
                    <p>(Computer Science - QS World Ranking 112)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary"> Western University   </h5>
                    <p>(Business Administration - QS World Ranking 114) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Calgary   </h5>
                    <p>(Nursing - QS World Ranking 182)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary"> 	McMaster University    </h5>
                    <p>(Health Sciences - QS World Ranking 189)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	University of Ottawa   </h5>
                    <p>(Law - QS World Ranking 203) </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">	Dalhousie University    </h5>
                    <p>(Engineering - QS World Ranking 298)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">  University of Victoria     </h5>
                    <p>(Environmental Studies - QS World Ranking 322)</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card university-card text-center  ">
                    <h5 class="mb-0 text-primary">  University of Saskatchewan  </h5>
                    <p>(Medicine - QS World Ranking 345)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost of Studying in the USA Section -->
<section class="section">
    <div class="container">
        <h2>Cost of Studying in Canada </h2>
        <div class="row card-deck">
            <div class="col-md-6">
                <div class="card ">
                    <h6><strong>Popular Courses in Canada</strong></h6>
<p>Canada is renowned for its diverse array of popular courses across numerous fields. Here are some sought-after programs for international students</p>
<p><ul>
    <li>Business Administration</li>
    <li>Computer Science</li>
    <li>Engineering</li>
    <li>Hospitality and Tourism</li>
    <li>Health Science</li>
    <li>Education</li>
</ul></p>

                    <h6><strong>Scholarships in Canada</strong></h6>
                    <p> International students who excel academically may qualify for scholarships in Canada. While these scholarships may not fully cover expenses, they can significantly alleviate the financial burden associated with education and living costs. Competition for scholarships is fierce, requiring separate applications for each university. Community and career colleges typically offer minimal scholarship opportunities, so exploring available options is essential</p>
                    <h6><strong>Co-operative Work Term</strong></h6>
<p>Co-op programs integrate practical work experience with academic learning. These full-time positions typically last between 12 to 17 weeks and allow students to gain hands-on experience while studying. Co-op opportunities help international students establish connections within the Canadian job market and develop a professional network</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                <h6><strong>Tuition Fees</strong></h6>
<p>The cost of studying in Canada varies based on several factors such as the institution, chosen program, location, and available funding opportunities. Living expenses—including rent, utilities, and leisure activities—also contribute to the overall expenditure.</p>                   
                    <p><span class="text-primary">	PG Diploma/Diploma/Certificate Programs: </span> CAD 15,000 - CAD 20,000 </p>
                    <p><span class="text-primary">	Bachelor's Programs : </span> CAD 15,000 - CAD 30,000 </p>
                    <p><span class="text-primary">	Master’s Programs </span>CAD 17,000 - CAD 35,000</p>                 
                    <h6><strong>Living Expenses </strong> </h6>
                    <p><span class="text-primary">Average per Annum: Approx. </span>CAD 20,000 </p>
                    <h6><strong>Monthly Accommodation</strong>  </h6>
                    <p><span class="text-primary">On-campus: </span>CAD 600 - CAD 1,000</p>
                    <p><span class="text-primary">Off-campus: </span>CAD 550 - CAD 1,200</p>
                    <p><span class="text-primary">Homestay: </span>CAD 1,000 - CAD 1,300</p>
                    <h6><strong>Career Opportunities in Canada </strong></h6>
                <p>The employment landscape in Canada is diverse, offering prospects across various sectors:</p>
                   
                    <p><span class="text-danger" >	1. Engineering , </span><span class="text-danger" >	2. Information Technology , </span><spen class="text-danger"> 3. Finance and Banking</spen> </p>
                    <p><span class="text-danger">	4.Business Management , </span><span class="text-danger" >	5. Education and Training , </span ><spen class="text-danger" >6. Hospitality </spen></p>
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
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Required Documents for Studying in Canada  </h4>
                            <p>To apply for studies in Canada, the following documents are typically required:</p>
                        <ul class="text-start">
                            <li>A valid passport</li>
                            <li>English proficiency scores (IELTS or PTE)</li>
                            <li>Copies of mark sheets for Grades 10, 12, and all semesters of the Bachelor’s degree</li>
                            <li>Backlog certificate (if applicable)</li>
                            <li>Work experience documents (if applicable)</li>
                            <li>Updated resume</li>
             
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-briefcase me-2" aria-hidden="true"></i>Canada Study Visa Process</h4>
<p>To study in Canada, apply for a visa ideally three months before your intended intake. Required documents include:</p> 
<ul class="text-start">                   
                            <li>A valid passport</li>
                            <li>Letter of acceptance from the university</li>
                            <li>English proficiency test results</li>
                            <li>Tuition fee receipt</li>
                            <li>GIC (Guaranteed Investment Certificate)</li>
                            <li>Medical certificate (if required)</li>
                            <li>Statement of Purpose (SOP) and resume</li>
                            <li>Visa application form and Family Information Form</li>
                            <li>Visa processing time: Approximately 3 to 4 months</li>
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
