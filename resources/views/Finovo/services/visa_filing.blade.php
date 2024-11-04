@extends('layouts.main')

@section('meta_title', 'Counselling | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('content')
  <!-- Header / Banner Section -->
  <div class="inner-hero inner-hero-2 bg-white" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 inner-hero-left">
          <h2 class="hero-title-txt">Apply for Your Dream Visa Stress-Free! - 100% Free</h2>
          <p>Expert guidance through every step of your visa journey - 98% success rate in visa approvals</p>
          <div class="comm-para">
            <a href="{{url('/contact')}}" id="openPopup" class="btn btn-primary">Book Your Free Visa Consultation</a>
          </div>
        </div>
        <div class="col-md-6 inner-hero-right">
          <img src="https://www.edwiseinternational.com/img/ap-t-img-3.jpg" alt="Visa Assistance" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="visa-asst-dtl-sec-wrap">
  <h2 class="text-start mb-4">Our Free Visa Filing Services</h2>
    <div class="visa-ass-dtl row" data-aos="fade-right" data-duration="200"> 
      <div class="col-md-6 visa-asst-img">
        <img src="https://www.edwiseinternational.com/img/adm-proc-img-1.jpg" alt="Personalized Guidance" class="img-fluid">
      </div>
      <div class="col-md-4 visa-asst-cont ">
        <h5 class="mb-0 "><strong>Expert Documentation Support</strong></h5>
        <ul class="mb-0 ">
          <li>Professional guidance</li>
          <li>Document verification</li>
          <li>Updated requirements</li>
          <li>Error-free filing</li>
        </ul>
      </div>
    </div>

    <div class="sectio-line-sepr text-center">
      <img src="https://www.edwiseinternational.com/img/section-join-lines-img.png" alt="Section Separator" class="w-25">
    </div>

    <div class="visa-ass-dtl row" data-aos="fade-left" data-duration="200">
      <div class="col-md-6 visa-asst-cont">
        <h3 class="mb-0 ">Application Assistance</h3>
        <ul class="mb-0 ">
          <li>Form filling support</li>
          <li>Document submission</li>
          <li>Application tracking</li>
          <li>Status updates</li>
        </ul>
      </div>
      <div class="col-md-6 visa-asst-img">
        <img src="https://www.edwiseinternational.com/img/visa-asst-img-4.jpg" alt="Visa Application Support" class="img-fluid">
      </div>
    </div>

    <div class="sectio-line-sepr text-center">
      <img src="https://www.edwiseinternational.com/img/section-join-lines-img.png" alt="Section Separator" class="w-50">
    </div>

    <div class="visa-ass-dtl row" data-aos="fade-right" data-duration="200">
      <div class="col-md-6 visa-asst-img">
        <img src="https://www.edwiseinternational.com/img/adm-proc-img-1.jpg" alt="Mock Interviews" class="img-fluid">
      </div>
      <div class="col-md-6 visa-asst-cont">
        <h3 class="mb-0">Interview Preparation</h3>
        <ul class="mb-0">
          <li>Mock interviews</li>
          <li>Common questions</li>
          <li>Country-specific tips</li>
          <li>Confidence building</li>
        </ul>
      </div>
    </div>

    <div class="sectio-line-sepr text-center last-seprtr">
      <img src="https://www.edwiseinternational.com/img/last-section-join-lines-img.png" alt="Section Separator" class="w-25">
    </div>

    <div class="visa-ass-dtl row" data-aos="fade-left" data-duration="200">
      <div class="col-md-6 visa-asst-cont">
        <h3 class="mb-0 ">Our Proven Process</h3>
        <ol class="mb-0">
          <li>
            <strong>Initial Assessment</strong>
            <p>Free consultation to understand your requirements and evaluate eligibility criteria</p>
          </li>
          <li>
            <strong>Documentation Support</strong>
            <p>Customized document checklist and verification assistance</p>
          </li>
          <li>
            <strong>Application Filing</strong>
            <p>Complete form filling and submission support with tracking</p>
          </li>
          <li>
            <strong>Interview Preparation</strong>
            <p>Comprehensive interview preparation with mock sessions</p>
          </li>
        </ol>
      </div>
      <div class="col-md-6 visa-asst-img">
        <img src="https://www.edwiseinternational.com/img/visa-asst-img-4.jpg" alt="Ongoing Support" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- Service Information Section -->
  <section class="info-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2 class="section-title">Why Choose Our Visa Filling?</h2>
          <div class="info-content">
            <h3>Personalized Support</h3>
            <p>Are you dreaming of studying abroad but feeling overwhelmed by the complex visa application process? We understand your concerns and offer comprehensive, FREE visa filing services to ensure your academic journey begins smoothly. Our expert consultants handle everything from documentation to submission, making your visa application stress-free and successful.</p>
          </div>
        </div>

        <div class="col-md-5">
          <h2 class="section-title">Get In Touch</h2>
          <div class="contact-form">
            @include('components.generalenquiry')
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Icon / What We Offer Section -->
  <section class="icon-section">
    <div class="container">
      <h2 class="section-title">What We Offer</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="icon-card">
          <i class="fa-solid fa-landmark"></i>
            <h5>Global University Guidance</h5>
            <p>Our counselors provide you with global university insights to make informed decisions.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-card">
          <i class="fa-solid fa-handshake-angle"></i>
            <h5>Admission Support</h5>
            <p>Get help with your university applications and admissions processes worldwide.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-card">
          <i class="fa-brands fa-cc-visa"></i>
            <h5>Visa Assistance</h5>
            <p>We simplify the visa process, ensuring you meet all requirements without stress.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

<!-- Custom CSS -->
<style>
  /* Service Information Section */
  .section-title {
    font-weight: bold;
    color: #106EBE;
    margin-bottom: 40px;
    text-align: center;
  }

  .info-section {
    padding: 60px 0;
  }

  .info-content {
    padding: 30px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .info-content h3 {
    color: #0FFCBE;
  }

  .info-content p {
    margin-bottom: 20px;
  }

  /* Contact Form */
  .contact-form {
    padding: 40px;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  /* Icons Section */
  .icon-section {
    padding: 60px 0;
    background-color: #eef7f8;
  }

  .icon-card {
    border: none;
    text-align: center;
    padding: 40px 20px;
    background: white;
    transition: transform 0.3s ease;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .icon-card:hover {
    transform: translateY(-10px);
  }

  .icon-card i {
    font-size: 3rem;
    color: #ff0042;
  }

  .icon-card h5 {
    margin-top: 20px;
    font-size: 1.5rem;
  }

  .icon-card p {
    margin-top: 10px;
    font-size: 1rem;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .info-section {
      padding: 30px 0;
    }

    .visa-ass-dtl {
      flex-direction: column; /* Stack vertically on smaller screens */
    }
  }

  .visa-asst-sec-hdr {
    padding: 40px 20px;
    background-color: #f8f9fa;
    text-align: left;
    border-radius: 5px;
    margin-bottom: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .sec-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
  }

  .highlighter {
    color: #007bff;
  }

  .comm-para {
    font-size: 1rem;
    color: #555;
    line-height: 1.5;
  }

  .visa-asst-dtl-sec-wrap {
    padding: 20px; /* Padding for the section */
    background-color: #ffffff; /* White background for clarity */
    border-radius: 5px; /* Optional: rounded corners */
    margin-bottom: 20px; /* Space below the section */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: subtle shadow */
  }

  .visa-ass-dtl {
    margin-bottom: 30px !important; /* Space below each detail section */
  }

  .visa-asst-cont h3 {
    font-size: 1.75rem; /* Font size for the section title */
    font-weight: 700; /* Bold weight for emphasis */
    color: #333; /* Dark text color */
    margin-bottom: 15px; /* Space below the title */
  }

  .visa-asst-cont p,
  .visa-asst-cont ul {
    font-size: 1rem; /* Font size for paragraph text */
    color: #555; /* Slightly lighter text color for readability */
    line-height: 1.6; /* Line height for better readability */
  }

  .sectio-line-sepr {
    margin: 30px 0; /* Space around section separators */
  }

  .sectio-line-sepr img {
    max-width: 100%; /* Make images responsive */
    height: auto; /* Maintain aspect ratio */
  }

  .last-seprtr img {
    margin-bottom: 0; /* Remove bottom margin for the last separator */
  }
</style>
