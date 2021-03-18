<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tinka - Education. Everywhere.</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

 @extends('layouts.master')
</head>

<body>
  @include('header')

  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">TINKA EDUCENTRE</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Tinka Educentre is keen to provide 
            quality education at an affordable pricing and  a conducive learning
            environment to students. Opening soon at Bukit Jelutong! </h2>
          <hr>
          <h1 data-aos="fade-left" data-aos-delay="600">UPSR . PT3 . SPM . IGCSE     </h1>
          
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/tinkaeducentre" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/table2.png"  class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Class That We Offered</h2>
          <p>View Below</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="physicalbox" data-aos="fade-up" data-aos-delay="200">
              <h3>Physical Tuition Class</h3>
              <img src="assets/img/offeredclass/physical.png" class="img-fluid" alt="">
              <p>Our new and revamped tuition centre is located at Bukit Jelutong.
                Available for UPSR, PT3, SPM & IGCSE students.</p>
              <a href="/registrationstudent" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="onlinebox" data-aos="fade-up" data-aos-delay="400">
              <h3>Online Class</h3>
              <img src="assets/img/offeredclass/online.png" class="img-fluid" alt="">
              <p>Online lessons are taught via Google Meet/Zoom Meeting.
                Learn from the comfort of your own home or pretty much
                everywhere.
              </p>
              <a href="/registrationstudent" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="homebox" data-aos="fade-up" data-aos-delay="600">
              <h3>Home Tuition</h3>
              <img src="assets/img/offeredclass/home tuition.png" class="img-fluid" alt="">
              <p>Home tuition programme is catered for one-to-one
                learning. Have our Tink-Educator drop by your place
                for personalised
              </p>
              <a href="/registrationstudent" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section>


  <main id="main">
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/apps.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
            
              <h2>Tinka App</h2>
              <p>
                Now your child is able to learn practically anywhere.
                Our app are engaging, immersive, interactive and 
                most importantly fun!
              </p>
              <div class="text-center text-lg-start">
                <a href="/tinkaapp" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Download Now</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>

             </div>
          </div>

         

        </div>
      </div>

    </section>

   
        <section id="joincourse" class="joincourse">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Join Us</h2>
              <p>Register To Our Website</p>
            </header>
    
            <div class="row gy-4" data-aos="fade-left">
     
              <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="studentbox">
                  <h3 style="color: #1B1464;">Students</h3>
                  <img src="assets/img/offeredclass/studentscropped.png" class="img-fluid" alt="">
                  <p>Enroll your child at Tinka Educentre now.</p>   
                  <a href="/registrationstudent" class="btn-buy">Register Now</a>
                </div>
              </div>

              <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="teacherbox">
                  <h3 style="color: #1B1464;">Tinka Tutor</h3>
                  <img src="assets/img/offeredclass/tinka tutor cropped.png" class="img-fluid" alt="">
                  <p>Earn a part-time income by
                    signing up as Tinka Tutor.</p>
                  <a href="/registrationteacher" class="btn-buy">Register Now</a>
                </div>
              </div>
    
        
    
             </div>
    
        </section>

  
    

    

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




  </main>

  @include('footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
</body>

</html>