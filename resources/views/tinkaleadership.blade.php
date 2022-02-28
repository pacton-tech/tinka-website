@extends('layouts.master')

@section('title')
{{ __("Tinka Leadership") }}
@endsection

@section('content')

@include('header')

<main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
  
        <ol>
        <li><a href="/">{{ __("Home") }}</a></li>
          <li>{{ __("About Us") }}</li>
          <li>{{ __("Tinka Leadership") }}</li>
        </ol>
        <h2>{{ __("Tinka Leadership") }}</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->
  

 <!-- ======= Team Section ======= -->
 <section id="team2" class="team2">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>{{ __("Our Leadership") }}</h2>
      <p>{{ __("Tinka Leadership") }}</p>
    </header>

    <div>
        <div class="row">
              <center><div class="col-md"></div>
                <div class="col-md member2" >
                <div class="pic"><img src="assets/img/team/squared/nikmohdsq.jpg" class="img-fluid" alt=""></div>
                <h5 class="text-black"><a href="/dato"> Dato' Nik Mohd Amin bin Nik Abd Majid</a></h5>
                <p class="text-black "> {{ __("Founder & Chairman") }}</p>
                </div>
                </div>
              </center>
        </div>

        <div class="row">
            <div class="col member2" >
                <center>
                  <div class="pic"><img src="assets/img/team/squared/faisal.jpg" class="img-fluid" alt=""></div>
                  <h5 class="text-black"><a href="/faisal"> Faisal Shadli Arshad</a></h5>
                  <p class="text-black">{{ __("Managing Director") }}</p>
                </center>
            </div>
            <div class="col-sm-1"></div>
            <div class="col member2" >
                <center>
                 <div class="pic"><img src="assets/img/team/squared/fadli.jpeg" class="img-fluid" alt=""></div>
                 <h5 class="text-black "><a href="/fadli">Fadli Saad</a></h5>
                 <p class="text-black"> {{ __("Tech Advisor") }}</p>
                </center>
            </div>
          </div>

        <div class="row">
            <div class="col member2" >
                  <center>
                    <div class="pic"><img src="assets/img/team/squared/emeritushd.jpg" class="img-fluid" alt=""></div>
                    <h5 class="text-black"><a href="/emeritus"> Professor Emeritus Dato' Dr. Ishak Harun</a></h5>
                    <p class="text-black"> {{ __("Advisor") }}</p>
                  </center>
            </div>
            
            <div class="col-sm-1"></div>
            <div class="col member2" >
                  <center>
                   <div class="pic"><img src="assets/img/team/squared/rozhanhd.jpg" class="img-fluid" alt=""></div>
                   <h5 class="text-black "><a href="/rozhan"> Rozhan M. Idrus</a></h5>
                   <p class="text-black"> {{ __("Advisor") }}</p>
                  </center>
            </div>
          </div>

          <div class="row">
            <div class="col member2" >
                  <center>
                    <div class="pic"><img src="assets/img/team/squared/aqliah.jpeg" class="img-fluid" alt=""></div>
                    <h5 class="text-black"><a href="/aqliah"> Nor Aqliah Arifin</a></h5>
                    <p class="text-black"> {{ __("Project Director") }}</p>
                  </center>
            </div>
            
            <div class="col-sm-1"></div>
            <div class="col member2" >
                  <center>
                   <div class="pic"><img src="assets/img/team/squared/rahman.jpeg" class="img-fluid" alt=""></div>
                   <h5 class="text-black "><a href="/rahman"> Muhd Abd. Rahman</a></h5>
                   <p class="text-black"> {{ __("QoF Digital") }}</p>
                  </center>
            </div>
          </div>

  
    </div>

   
</section><!-- End Team Section -->




    
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
