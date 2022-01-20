@extends('layouts.master')

@section('title')
{{ __("Tinka Educentre") }}
@endsection

@section('content')

@include('header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
        <li><a href="/">{{ __("Home") }}</a></li>
          <li>{{ __("Product & Services") }}</li>
          <li>{{ __("Tinka Educentre") }}</li>
        </ol>
        <h2>{{ __("Tinka Educentre") }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->


      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>{{ __("Tinka Educentre") }}</h3>
                <h2>{{ __("Get to know our tuition centre.") }}</h2>
                <p>
                    {{ __("Versatile Straits acquired a tuition centre in Bukit Jelutong, Shah Alam and converted the traditional tuition centre into TINKA™ Educentre. Currently, TINKA™ Educentre has 25 tutors “Tink-educators” who covers Standard 1 to Form 5 students including IGCSE.") }}
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
            <h2>{{ __("Subjects that we offer on our tuition centre for physical tuition class.") }}</h2>
            <p>{{ __("Our Subjects") }}</p>
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

      <!-- Start Gallery -->

      <section id="tinkateam" class="tinkateam">

        <div class="container" >
      
          <header class="section-header">
            <p>{{ __("Gallery") }}</p>
          </header>
      
          <div class="row gy-4"
          
          >
      
            <div class="col-lg-12 col-md-4 d-flex align-items-stretch rounded-circle m-auto d-none d-sm-none d-md-none d-lg-block" style="width:45%">
    
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('assets/img/gallery/gallery1.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery2.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery3.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery4.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery5.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery6.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery7.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery8.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery9.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery10.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery11.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery12.jpeg') }}" class="d-block w-100" alt="...">
                    </div>

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <!--  -->
              
            </div>        

            <div class="col-lg-12 col-md-4 d-flex align-items-stretch rounded-circle m-auto d-lg-none d-md-block w-100">
    
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('assets/img/gallery/gallery1.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery2.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery3.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery4.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery5.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery6.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery7.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery8.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery9.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery10.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery11.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('assets/img/gallery/gallery12.jpeg') }}" class="d-block w-100" alt="...">
                    </div>

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <!--  -->
              
            </div>

      </section>

      <!-- End Gallery -->
  
     
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
