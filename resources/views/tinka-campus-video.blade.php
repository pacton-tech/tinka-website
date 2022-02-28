@extends('layouts.master')

@section('title')
{{ __("Tinka Campus") }}
@endsection

@section('content')

@include('header')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">{{ __("Home") }}</a></li>
        <li>{{ __("Tinka Campus") }}</li>
        <li>{{ __("Walkthrough") }}</li>
      </ol>
      <h2>{{ __("Tinka Campus Walkthrough") }}</h2>

    </div>
  </section><!-- End Breadcrumbs -->

<body>

   <!-- ======= Header ======= -->
<!-- End Header -->

<!--Tinka Team Section-->
  <section id="tinkateam" class="tinkateam">

    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <h2>{{ __("Tinka Campus") }}</h2>
        <p>{{ __("Walkthrough") }}</p>
      </header>
  
      <div class="row gy-4">
  
        <div class="col-lg-12 col-md-4 d-flex align-items-stretch rounded-circle" data-aos="fade-up" data-aos-delay="100">
              
            <video width="100%" src="assets/video/tinkacampus.mp4" controls></video>
           
        </div>        
  </section>
<!-- End Team Section -->

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

