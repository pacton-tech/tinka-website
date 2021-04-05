@extends('layouts.master')

@section('title')
Tinka App 
@endsection

@section('content')

@include('header')

<main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Product & Services</li>
          <li>Tinka App</li>
        </ol>
        <h2>Tinka App</h2>

      </div>
    </section><!-- End Breadcrumbs -->


  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        
        <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="200">
            <center>
              <img src="assets/img/apps.png" class="img-fluid" alt="">
            </center>  
        </div>


        <div class="col-lg-12 " data-aos="fade-up" data-aos-delay="200">
          <center>
              <div>
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Get The App</span>
                  <i class="bi bi-arrow-down"></i>
                </a>
              </div>
          </center>
        </div>
        <center>
        <div class="app-links mt-3">
                 <a href="https://www.apple.com/my/app-store/" target="_blank"><img src="./assets/img/appstore.png" alt="" width="150"></a>
                 <a href="https://play.google.com/" target="_blank"><img src="./assets/img/playstoreg.png" alt="" width="150"></a>

                </div>
        </center>
      </div>
    </div>

  </section><!-- End About Section -->

   <!-- ======= Features Section ======= -->
   <section id="features" class="features">

    <section class="container py-5 py-md-6 py-lg-7">

      <div class="row g-0 py-3 py-md-0">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
           <img src="./assets/img/offeredclass/onlinelearning2.png" width="400" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
            <div class="my-auto mx-auto text-center" style="max-width: 450px;">
              <h2 style="font-weight: bold; text-align: justify; color: #1B1464">Online Learning</h2>
              <p style="text-align: justify; color: #1B1464;">Learn from our mobile app at the comfort of your own home or literally from anywhere! It's smart, easy-to-use and best of all, convenient!</p>
            </div>
          </div>
        </div>
      </div>
   
      <div class="row g-0 py-3 py-md-0">
        <div class="col-md-6 mb-4 mb-md-0">
          
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
            <div class="my-auto mx-auto text-center" style="max-width: 450px;">
              <h2 style="font-weight: bold; text-align: left; color: #1B1464">Professionally trained educators</h2>
              <p style="text-align: justify; color: #1B1464;">Our teachers are professionally trained and are carefully vetted, to ensure that your child gets the best!</p>
            </div>
          </div>     
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
              <img src="./assets/img/offeredclass/12.png" alt="">
             </div>
          </div>
        </div>
      </div>

      <div class="row g-0 py-3 py-md-0">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
           <img src="./assets/img/offeredclass/13.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
            <div class="my-auto mx-auto text-center" style="max-width: 450px;">
              <h2 style="font-weight: bold; text-align: justify; color: #1B1464">Track your child's learning</h2>
              <p style="text-align: justify; color: #1B1464;">Our AI powered app generates a comprehensive online report on your child's learning. We are able to step in wherever help is needed.</p>
            </div>
          </div>
        </div>
      </div>
       
      <div class="row g-0 py-3 py-md-0">
        <div class="col-md-6 mb-4 mb-md-0">
          
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
            <div class="my-auto mx-auto text-center" style="max-width: 450px;">
              <h2 style="font-weight: bold; text-align: left; color: #1B1464"> Accessible lesson videos</h2>
              <p style="text-align: justify; color: #1B1464;">Need a refresher before an exam? Our lesson videos are recorded and available at your fingertips when needed.</p>
            </div>
          </div>     
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6" style="background-color: #F7F7F7;"><span  style="opacity: 1;"></span>
              <img src="./assets/img/offeredclass/12.png" alt="">
             </div>
          </div>
        </div>
      </div>

    </section>
  </section>
  <!-- End Features Section -->



 

    
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
