@extends('layouts.master')

@section('title')
About Us
@endsection

@section('content')

@include('header')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Home</a></li>
        <li>About Us</li>
        <li>About Tinka</li>
      </ol>
      <h2>About Tinka</h2>

    </div>
  </section><!-- End Breadcrumbs -->

<body>

   <!-- ======= Header ======= -->
<!-- End Header -->


   <!-- ======= About Tinka Section ======= -->
   <section id="tinka" class="hero d-flex align-items-center">
      
    <div class="container">
      <div class="row">
        <center>
         <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">About Tinka</h1>
          <hr>
          <p style="text-align: justify;">TINKA™ was born and incorporated under Versatile Straits Sdn Bhd, a homegrown edtech company.  
            Its objective is to not only to create passive learners but also to create learners who possesses 
            a higher-order digital and thinking skills. Its goal is to create a learning experience through 
            “experiential learning”.
          </p>
          <p style="text-align: justify;">TINKA™ is positioned to be a Supplementary Enrichment and Enhancement program whereby its content 
            is meta-tagged with curriculum data such as Learning Areas and Learning Outcomes as to enable self-paced, 
            self-directed learning and also to support in-classroom and live-stream learning.
            </p>
                    
            
         </div>
        </center>
      </div>
    </div>

  </section><!-- End Hero -->

 <!-- ======= Values Section ======= -->
 <section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Our Vision & Mission</p>
      
    </header>

    <div class="row">

      <div class="col-lg-6">
        <div class="box" data-aos="fade-up" data-aos-delay="200">
          
          <h3>Vision</h3>
          <p>
            Democratize access to international standard quality education nationwide 
            in order to produce intellectual and globally competent individuals towards 
            the betterment of the nation.
            </p>
      
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="400">
         
          <h3>Mission</h3>
          <p>Able to supplement classroom education with innovative content delivery
             methods via the TINKA™ Platform.
          </p>
       
        </div>
      </div>

    </div>

  </div>

</section><!-- End Values Section -->

<!--Tinka Team Section-->
    <section id="tinkateam" class="tinkateam">

    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <h2>Portfolio</h2>
        <p>Our Team</p>
      </header>
  
      <div class="row gy-4">
  
        <div class="col-lg-12 col-md-4 d-flex align-items-stretch rounded-circle" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/teamss.png" class="img-fluid" alt="">
            </div>
           
          </div>
        </div>        
  </section>
<!-- End Team Section -->

    <!-- Social Media Section-->

    <section>
      <div class="container mt-5 mb-5 d-flex justify-content-center">
        <ul class="social-list">
            <li>
                <div class="maincard p-3">
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
                <div class="maincard p-3">
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
              <div class="maincard p-3">
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

