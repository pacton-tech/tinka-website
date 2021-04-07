@extends('layouts.master')

@section('title')
Subscriptions
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

    <section class="inner-page">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-upsr">UPSR</li>
              <li data-filter=".filter-pt3">PT3</li>
              <li data-filter=".filter-spm">SPM</li>
              <li data-filter=".filter-igcse">IGCSE</li>
            </ul>
          </div>
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                 <div class="portfolio-links">
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
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