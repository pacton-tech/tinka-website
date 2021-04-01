@extends('layouts.master')

@section('title')
Plan
@endsection

@section('content')

@include('header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index">Home</a></li>
          <li>Tuition Fees</li>
        </ol>
        <h2>Tinka Educentre Course</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>Course</h2>
          <p>Tinka Educentre Course</p>
        </header>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="">All</li>
              <li data-filter=".filter-upsr" class="filter-active">UPSR</li>
              <li data-filter=".filter-pt3">PT3</li>
              <li data-filter=".filter-spm">SPM</li>
              <li data-filter=".filter-igcse">IGCSE</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 673px;">

          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/1" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 440px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/2" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 880px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/3" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 0px; top: 336.5px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/4" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 440px; top: 336.5px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/5" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-upsr" style="position: absolute; left: 880px; top: 336.5px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/6" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-pt3" style="position: absolute; left: 0px; top: 673px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/7" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-pt3" style="position: absolute; left: 440px; top: 673px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/8.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/8" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-pt3" style="position: absolute; left: 880px; top: 673px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/9.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/9" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-pt3" style="position: absolute; left: 0px; top: 1009.5px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/10.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/10" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-pt3" style="position: absolute; left: 440px; top: 1009.5px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/11.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/11" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-spm" style="position: absolute; left: 880px; top: 1009.5px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/12.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/12" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-spm" style="position: absolute; left: 0px; top: 1346px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/13.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/13" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-spm" style="position: absolute; left: 440px; top: 1346px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/14.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/14" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-spm" style="position: absolute; left: 880px; top: 1346px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/15.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/15" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>                
          <div class="col-lg-4 col-md-6 portfolio-item filter-spm" style="position: absolute; left: 0px; top: 1682.5px; display: none;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/16.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/16" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>    
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection