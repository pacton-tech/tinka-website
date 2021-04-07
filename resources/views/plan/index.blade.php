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
          @foreach($plans as $plan)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{!! $plan['category'] !!}" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/{!! $plan['id'] !!}.png" class="img-fluid" alt="">
              <div class="portfolio-info">
               <div class="portfolio-links">
                  <a href="/plan/{!! $plan['id'] !!}" title="More Details"><i class="bi bi-link"></i> Details</a>
                </div>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection