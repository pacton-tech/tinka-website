@extends('layouts.master')

@section('title')
Fadli Saad
@endsection

@section('content')

@include('header')

<main id="main">
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/">{{ __("Home") }}</a></li>
        <li><a href="/tinkaleadership">{{ __("Tinka Leadership") }}</a></li>
        <li>Fadli Saad</li>
      </ol>
      <h2>Fadli Saad</h2>
    </div>
  </section>
<!-- End Breadcrumbs -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/team/fadli.jpeg"  class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Fadli Saad</h1>
        
        <h2 data-aos="fade-up" data-aos-delay="300"> {{ __("Tech Advisor") }} </h2>
        <hr>

            <p data-aos="fade-left" data-aos-delay="500"> {{ __("A Certified Ethical Hacker (CEH), Fadli has the eye on internet security in the beginning of his IT career. With the objective to safeguards information system assets by identifying and solving potential and actual security problems and to create awareness of the importance of security in IT starting from the website or web application itself, Fadli is very concern on internet security. Graduated from International Islamic University Malaysia (November 2006) in Bachelor of Engineering (Honors) (Manufacturing Engineering), he is now the Technical Lead at Lava Systems Sdn Bhd.") }} 
            </p>
          
            <p data-aos="fade-left" data-aos-delay="600">{{ __("In 2010 he was the System and Solution Analyst at Ipsos Sdn Bhd whom manage various projects particularly for client in Holland, Brazil and France on IVR system, web-survey, mobile survey and SMS survey. He also scrutinised data processing to and from databases, as well as developed compatible template for mobile devices, web-based application to manage coaching email using C#, database management using MSSQL, and provide day-to-day support for project under Holland, Brazil, France and rest of the world (except Asia). He also developed automation scripts for file transaction to a secure FTP server for daily checking.") }}
            </p>
          
             <p data-aos="fade-left" data-aos-delay="700">{{ __("He also held a post as Project Manager in ZNA System Sdn Bhd between July 2008 – September 2010 (Project Basis) with the task to managed various project on contract basis namely for 1GIS application for Integrated Transport Information System (ITIS) DBKL and elearning solution for MARDI, prepared tender document (government and private), documentation, proposal and collaborate and manage subordinate in handling daily tasks, delegates task to ensure smooth operation and handling progress meeting in the absence of the Company Director.") }}
             </p>

             <p data-aos="fade-left" data-aos-delay="700">{{ __("He co-founded Laundry On The Go Sdn Bhd in 2015, an on-demand laundry aggregator and serve as a trustee at Yayasan Kebaikan Malaysia (Kindness Malaysia) since 2009.") }}
             </p>
          
                 
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/tinkaleadership" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>{{ __("View Full Tinka Leadership") }}</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
     
    </div>
  </div>

</section><!-- End Hero -->
 <!-- Social Media Section-->

 <section>
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <ul class="social-list">
        <li>
            <div class="maincard">
                <div class="thecard">
                  <a href="https://www.facebook.com/tinkamalaysia" target="_blank">
                    <div class="thefront text-center py-4 sfacebook">
                        <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                    </div>
                    <div class="theback text-center py-4 sfacebook">
                        <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                    </div>
                  </a>
                </div>
            </div>
        </li>
        <li>
            <div class="maincard">
                <div class="thecard">
                  <a href="https://www.instagram.com/tinkamalaysia" target="_blank">
                    <div class="thefront text-center py-4 sinstagram">
                        <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                    </div>
                    <div class="theback text-center py-4 sinstagram">
                        <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                    </div>
                  </a>
                </div>
            </div>
        </li>
        
       <li>
          <div class="maincard">
            <div class="thecard">
              <a href="https://tinka.wasap.my" target="_blank">
                <div class="thefront text-center py-4 swhatsapp">
                    <div class="social-icon"> <i class="fa fa-whatsapp fa-2x"></i> </div>
                </div>
                <div class="theback text-center py-4 swhatsapp">
                    <div class="social-text"> <i class="fa fa-whatsapp fa-2x"></i></div>
                </div>
              </a>
            </div>
          </div>
       </li>

  </ul>
</div>

</section>


<!-- End of Social Media Section-->


</main><!-- End #main -->

@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
