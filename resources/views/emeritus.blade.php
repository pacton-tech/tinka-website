@extends('layouts.master')

@section('title')
Professor Emeritus Dato' Dr. Ishak Harun
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
        <li>Professor Emeritus Dato' Dr. Ishak Harun</li>
      </ol>
      <h2>Professor Emeritus Dato' Dr. Ishak Harun</h2>
    </div>
  </section>
<!-- End Breadcrumbs -->

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/team/emeritushd.jpg"  class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Professor Emeritus Dato' Dr. Ishak Harun</h1>
        
        <h2 data-aos="fade-up" data-aos-delay="400"> {{ __("Advisor") }} </h2>
        <hr>
        <h4 data-aos="fade-left" data-aos-delay="500">{{ __("Consultant / Advisor / Visiting Scholar University and International Organization") }}
        </h4>
        <ol data-aos="fade-left" data-aos-delay="600">
            <li>{{ __("Consultant to World Bank 1989 on financing primary education for development.") }}</li>
            <li>{{ __("World Book Encyclopedia International edition: London and Chicago 1988-2000. Member of Editorial Advisory Board. Met every year in London, Chicago, Sydney, Dublin etc.") }}</li>
            <li>{{ __("Consultant to Uni of Brunei to develop Education Program for BEd in 1997/98.") }}</li>    
            <li>{{ __("Consultant to the Ministry of Education Brunei DS 2011-2 on B. Melayu Literacy Pedagogy (Rumi n Jawi)") }}</li>
            <li>{{ __("Examiner, Institute of Education Singapore, 1988.") }}</li>
            <li>{{ __("Visiting scholar n consultant to the Faculty of Education, Kyushu University Japan 1987.") }}</li>
            <li>{{ __("Fulbright visiting scholar, School of Education, Stanford Uni California 1984.") }}</li>
        </ol>    
        
        <h4 data-aos="fade-left" data-aos-delay="700">{{ __("Consultant and Adviser to Local Organization") }}</h4>
        <ol data-aos="fade-left" data-aos-delay="800">
            <li> {{ __("Ministry of Education in KBSR and KBSM from 1981 - 1988") }}</li>
            <li>{{ __("Board Member of Yayasan Pelajaran MARA from 1994 - 1998") }} </li>
            <li>{{ __("Board Member of Dewan Bahasa dan Pustaka - DBP") }}</li>
            <li>{{ __("Professor of Pedagogy at University of Malaya") }}</li>
            <li>{{ __("MQA - Malaysian Qualification Agency") }}</li>
        </ol>
          
                 
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
