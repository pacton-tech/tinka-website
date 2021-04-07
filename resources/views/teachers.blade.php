@extends('layouts.master')

@section('title')
Teachers Profile
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
        <li>Teachers Profile</li>
      </ol>
      <h2>Teachers Profile</h2>

    </div>
  </section><!-- End Breadcrumbs -->

<body>



<section id="doctors" class="doctors">
      <div class="container">

        <header class="section-header" data-aos="fade-left" data-aos-delay="100">
            <h2>Tinka Teachers</h2>
            <p>Teachers Profile</p>
        </header>

        <div class="row">

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/baharuddin.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Baharuddin bin Haji Kasim</h4>
                <p> Full Time Tutor</p>
                <p> 22 years teaching experience </p>
                <span> Diploma Eksekutif Pentadbiran, Sijil Fasilitator Pendidikan</span>      
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/lyana.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Noor Lyana binti Mohd Rohaizad</h4>
                <p> Full Time Tutor</p>
                <p> 6 years teaching experience </p>
                <span>Bachelor of Science (Hons) Chemistry </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/halimatul.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Halimatul Saadiah Binti Che Dolah</h4>
                <p>Lab Assistance / Tutor</p>
                <p> 6 years teaching experience </p>
                <span>Bachelor Science Of Applied Chemistry </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/alizan.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mohd Alizan Bin Azhari</h4>
                <p> Teacher At Smi Darus Salim</p>
                <p> 8 years teaching experience </p>
                <span>Bachelor Of Psychology</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/azrul.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Azrul Hafiz Bin Kamaruddin</h4>
                <p> Tutor / Student (UPM)</p>
                <p> 10 years teaching experience </p>
                <span>Bachelor In Sc. (Hons) Microbiology </span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
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
