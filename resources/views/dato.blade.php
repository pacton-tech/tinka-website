@extends('layouts.master')

@section('title')
Dato Nik Mod Amin bin Nik Abd Majid
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
        <li>Dato Nik Mod Amin bin Nik Abd Majid</li>
      </ol>
      <h2>Dato Nik Mod Amin bin Nik Abd Majid</h2>
    </div>
  </section>
<!-- End Breadcrumbs -->


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/team/nikmohd.jpg"  class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Dato' Nik Mod Amin bin Nik Abd Majid</h1>
        
        <h2 data-aos="fade-up" data-aos-delay="400"> {{ __("Founder & Chairman") }} </h2>
        <hr>
        <p data-aos="fade-left" data-aos-delay="200">{{ __("Dato’ Nik Mod Amin is the founder of Versatile Straits Sdn Bhd.") }}</p>

         <p data-aos="fade-left" data-aos-delay="300"> {{ __("He is a prominent figure in the Malaysian banking industry. He currently holds the position as Director and Shareholder of Mirmas Holding Sdn Bhd through FASK Capital Sdn Bhd. He is also currently the Chairman and Director of FASK Holding Group and the founder of FASK Capital Sdn Bhd (formerly known as The Royal Mint Exchange Sdn Bhd) and serves as the Non-Independent Director on the Board of AWC Berhad.") }}</p>
          
          <p data-aos="fade-left" data-aos-delay="400">{{ __("Dato’ Nik was previously the CEO/Executive Director of BSN Commercial Bank (M) Berhad. During his tenure with BSN Commercial, he re-engineered the bank’s business direction towards assisting Small Medium Industries. He was also the Board Member of Universiti Utara Malaysia (UUM) and a Trustee to the Malaysian Humanitarian Foundation.") }}</p>
          
         <p data-aos="fade-left" data-aos-delay="500">{{ __("Prior to that, was also the General Manager of Perbadanan Usahawan Nasional Berhad (“PUNB”), setting up the funds’ investment division. He also held key senior positions in Maybank Berhad and Affin Bank Berhad executing risk management, strategic planning, credit management, international banking roles in the respective banks. Datuk Nik holds a Degree in Economics from the University of Malaya.") }} </p>
          
          <p data-aos="fade-left" data-aos-delay="600">{{ __("Being a serial entrepreneur, Dato’ Nik is involved in multiple industries including Finance, Agriculture, Technology, Engineering and Education.") }}</p>
        
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
