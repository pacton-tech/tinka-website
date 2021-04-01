@extends('layouts.master')

@section('title')
FAQ 
@endsection

@section('content')

@include('header')

<main id="main">

  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>FAQ</li>
      </ol>
      <h2>FAQ</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

<!-- ======= FAQ section ======= -->
 <section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Hi, how can we help you?</p>
    </header>



    
    <div class="container">
        <div class="row"></div>
        <div class="row">
          <center>
            <div class="col-md-4 col-md-offset-3">
                <form action="" class="search-form">
                    <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="search" id="search" placeholder="SEARCH FAQ">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </form>
            </div>
          </center>
        </div>
    </div>

    <div>
      <div class="row">
            <center><div class="col-md"></div>
              <div class="col-md member2" >
                <div class="pic"><img src="assets/img/table2.png" class="img-fluid" width="500" alt=""></div>
                
              </div>
            </center>
      </div>

      <!-- ====== FAQ Tab Section =-====== -->
      <section id="faqtab" class="faqtab">
        <div class="row">
          <div class="faqtabs">
            <div>
              <a href="#">FAQ</a>
            </div>
            <div>
              <a href="#">System Requirement</a>
            </div>
            <div>
              <a href="#">Trouble Shooting</a>
            </div>
            <div>
              <a href="#">Certification</a>
            </div>
            <div>
              <a href="#">Payments</a>
            </div>
          </div>
        </div>
      </section>

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Frequently Asked Questions</p>
    </header>

    <div class="row">
      <center>      
        <div class="col-lg-6">
        <!-- F.A.Q List 1-->
        <div class="accordion accordion-flush" id="faqlist1">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                TINKA™ Backstory
              </button>
            </h2>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                <p>The TINKA™ initiative was born during the various engagement done by Centre for Economic 
                  Policy and Research Malaysia (CEPR Malaysia), a think tank under FASK Group of companies 
                  which aims to promote an integrated learning and teaching platform with a <b> mission </b>to 
                  revolutionize and democratize learning by leveraging on technology and digital tools.</p> 

                <p>Nowadays, students from a young age are exposed to highly immersive content that desensitizes 
                  them to regular modes of learning. Every student is unique in their own way and because 
                  of this, various teaching approaches needs to be implemented to explain learning areas. 
                  The vision of <b> personalized learning </b> for each student has been out of reach due to the 
                  inability to individually track the massive number of students in real time. The digital 
                  tools for education that are available today are still disintegrated whereby the usage 
                  are still not seamless and time consuming. TINKA™ aims to provide a total solution to 
                  the status quo. </p>

                <p> Understanding the urgency to nurture and unlock a new breed of learners for future workforce 
                  of Malaysia, TINKA™ was born and incorporated under Versatile Straits Sdn Bhd, a 
                  homegrown edtech company.  Its objective is to not only to create passive learners 
                  but also to create learners who possesses a higher-order digital and thinking skills.
                   Its goal is to create a learning experience through “experiential learning”.</p>

                <p> TINKA™ is positioned to be a Supplementary Enrichment and Enhancement program whereby its content is 
                  meta-tagged with curriculum data such as Learning Areas and Learning Outcomes as to
                   enable self-paced, self-directed learning and also to support in-classroom and 
                   live-stream learning.</p>
                <p> TINKA™ is positioned to be a <b> Supplementary Enrichment and Enhancement </b> program whereby its content 
                  is meta-tagged with curriculum data such as Learning Areas and Learning Outcomes as 
                  to enable self-paced, self-directed learning and also to support in-classroom and 
                  live-stream learning.</p>

                <p>
                In 2021, Versatile Straits acquired a tuition centre in Bukit Jelutong, Shah Alam and 
                converted the traditional tuition centre into <b> TINKA™ Educentre.</b> The centre offers 
                premium ambience and a recording studio that produces its first <b> “TINKA™ Lightboard 
                Series”.</b> Currently, TINKA™ Educentre has 25 tutors (“Tink-educators”) who covers 
                <b> Standard 1 to Form 5 students including IGCSE.</b>
                </p>

                <p><b><i>Disclaimer: The TINKA™ app will be available to the public on iOS Appstore and Google Playstore on 1st of March 2021.</i></b></p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                TINKA™ Technology & Contents
              </button>
            </h2>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
               <p>In 2020, Versatile Straits partnered with Pacton Technologies to customize the TINKA™ 
                 digital education platform which includes all the tools for digital education. It has 
                 an in-house developed <b> “administered classroom conferencing” </b> technology where tools such 
                 as the <b> “Interactive Digital Blackboard” </b> are used by the teachers as a teaching aid. It 
                 also includes easy access folders for teachers and students to store documents, videos 
                 and quizzes. TINKA™ offers live teaching and on-demand pre-recorded contents by their 
                 <b>“Tink-educators”.</b> </p>

               <p>TINKA™ users are supported with “pre- and post-lecture” animation contents that is created 
                 in-house by <b> TINKA™ Studio </b> and its partners. These videos included an <b> “in-video
                  micro-assessments” </b> from <b> TINKA™ Question Bank </b>that are used to assess and generate 
                  its students profiling. These data are made to teachers, students and parents in 
                  a simplified dashboard form <b> (“TINKA™ Analytics”).</b> <b> TINKA™ Artificial Intelligence</b> 
                  strives to curate personalized content for its users according to their learning 
                  approach preferences.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                TINKA™ Vision 
              </button>
            </h2>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                <p>
                In 5 years’, TINKA™ aims to be the <b> “Netflix of Education” </b>and to be able to bridge the digital divide between rural and urban students.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion accordion-flush" id="faqlist2">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                 Is Tinka App is free?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                <p>
                Tinka is a subscription based app.
                </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                How can I keep my child's account safe and secure?  
                </button>
              </h2>
              <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body"><p>
                Please ensure the password that was used to sign in into your
                 child's account is not shared to others. Reset yourpassword if 
                 it's compromised.
                 </p>
                </div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  How do I change/ reset my password?
                </button>
              </h2>
              <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body"><p>
                Click on the 'Reset my password' link below the sign up field and a password reset email is sent to your email.
                </p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
  
        </div>
      </div>
    </center>

    
    </div>

  </div>

</section><!-- End F.A.Q Section -->


 </div>

</section><!-- End FAQ Section -->
   <!-- Social Media Section-->

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


<!-- End of Social Media Section-->


</main><!-- End #main -->
@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
