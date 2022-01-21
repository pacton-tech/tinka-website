@extends('layouts.master')

@section('title')
Muhd Abd. Rahman
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
        <li>Muhd Abd. Rahman</li>
      </ol>
      <h2>Muhd Abd. Rahman</h2>
    </div>
  </section>
<!-- End Breadcrumbs -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/team/squared/rahman.jpeg"  class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Muhd Abd. Rahman</h1>
        
        <h2 data-aos="fade-up" data-aos-delay="300"> {{ __("QoF Digital") }} </h2>
        <hr>

          
                 
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
