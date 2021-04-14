@extends('layouts.master')

@section('title')
Tinka Educentre 
@endsection

@section('content')

@include('header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
        <li><a href="/">Home</a></li>
          <li>Product & Services</li>
          <li>Tinka Educentre</li>
        </ol>
        <h2>Tinka Educentre</h2>

      </div>
    </section><!-- End Breadcrumbs -->


      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Tinka Educentre</h3>
                <h2>Get to know our tuition centre.</h2>
                <p>
                    Versatile Straits acquired a tuition centre in Bukit Jelutong, Shah Alam 
                    and converted the traditional tuition centre into TINKA™ Educentre. 
                    Currently, TINKA™ Educentre has 25 tutors (“Tink-educators”) who 
                    covers Standard 1 to Form 5 students including IGCSE.
                </p>
                
               </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <video class="img-fluid" width="900"  controls src="./assets/video/tinkaeducentre.mp4"></video>               
            </div>
  
          </div>
        </div>
  
      </section><!-- End About Section -->

       <!-- ======= Subjects Section ======= -->
    <section id="subjects" class="subjects">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Subjects that we offer on our tuition centre for physical tuition class.</h2>
            <p>Our Subjects</p>
          </header>
  
          <div class="row gy-4" data-aos="fade-left">
  
            <div class="col-md-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <center >
               <a href="/plan"><img src="./assets/img/offeredclass/UPSR2.png" alt="" width="400"></a>
              </center>
            </div>
  
            <div class="col-md-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <center >
                <a href="/plan"><img src="./assets/img/offeredclass/pt32.png" alt="" width="400"></a>
              </center>
            </div>

            <div class="col-md-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <center >
                <a href="/plan"><img src="./assets/img/offeredclass/spm2.png" alt="" width="400"></a>
              </center>
            </div>

            <div class="col-md-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <center>
                <a href="/plan"><img src="./assets/img/offeredclass/igcse2.png" alt="" width="400"></a>
              </center>
            </div>
           
  
          </div>
  
        </div>
  

        
      </section>
      <!-- End Pricing Section -->
  
     
  </main><!-- End #main -->


    
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
