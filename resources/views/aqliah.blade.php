@extends('layouts.master')

@section('title')
Nor Aqliah Arifin
@endsection

@section('content')

@include('header')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/tinkaleadership">Tinka Leadership</a></li>
        <li>Nor Aqliah Arifin</li>
      </ol>
      <h2>Nor Aqliah Arifin</h2>
    </div>
  </section>
<!-- End Breadcrumbs -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/team/aqliah.jpeg"  class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Nor Aqliah Arifin</h1>
        
        <h2 data-aos="fade-up" data-aos-delay="400"> Project Director </h2>
        <hr>
        <p>Nor Aqliah is the Project Director of Versatile Straits Sdn Bhd.</p>

            <p> She is a licensed Counsellor with Lembaga Kounselor Malaysia. 
                She holds a Diploma in Education from UNISEL and a Bachelor of Counselling 
                from University of Malaya. 
            </p>
          
            <p>Her qualification and experience in the education industry has brought 
                her the edge on building lesson plans and managing TINKA’s educational assets.
            </p>
          
             <p>Prior to this, she was attached to TOC Automotive College in various 
                 management positions and served a stint as a kindergarten teacher.
            </p>
                 
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/tinkaleadership" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>View Full Tinka Leadership</span>
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
