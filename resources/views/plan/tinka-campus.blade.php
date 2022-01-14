@extends('layouts.master')

@section('title')
Tinka Campus - Digital Education Platform
@endsection

@section('content')

@include('header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="#">Fees</a></li>
          <li>Tinka Campus</li>
        </ol>
        <h2>Tinka Campus - Digital Education Platform</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>Fees</h2>
          <p>Tinka Campus</p>
        </header>

        <!-- style="max-height: 579px;" -->

        <div class="row gy-4 aos-init aos-animate" data-aos="fade-left" >

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">Standard</h3>
              <div class="price"><sup>RM</sup>39<span> / month</span></div>
              <img src="{{ asset('assets/img/home-tuition.png') }}" class="img-fluid" alt="">
              <ul style="height: 88px;">
                <li>Access all subjects (KSSM & KSSR) using the TINKA Campus Platform (without TINKA Tablet)</li>
              </ul>
              <a href="https://campus.tinka.world" class="btn-buy">Start Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">Standard QAF</h3>
              <div class="price"><sup>RM</sup>39<span> / month</span></div>
              <img src="{{ asset('assets/img/home-tuition.png') }}" class="img-fluid" alt="">
              <ul style="height: 88px;">
                <li>Access QOF Islamic Studies using the TINKA Campus Platform (without TINKA Tablet)</li>
              </ul>
              <a href="https://campus.tinka.world" class="btn-buy">Start Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">Standard Plus</h3>
              <div class="price"><sup>RM</sup>79<span> / month</span></div>
              <img src="{{ asset('assets/img/home-tuition.png') }}" class="img-fluid" alt="">
              <ul style="height: 88px;">
                <li>Access all subjects (KSSM & KSSR) OR QOF Islamic Studies using the TINKA Campus Platform (inclusive of the TINKA Tablet) - 1 year contract</li>
              </ul>
              <a href="https://campus.tinka.world" class="btn-buy">Start Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">Premium</h3>
              <div class="price"><sup>RM</sup>99<span> / month</span></div>
              <img src="{{ asset('assets/img/home-tuition.png') }}" class="img-fluid" alt="">
              <ul>
                <li>Standard Plus package including access to PREMIUM* video-based content curated by experts</li>
              </ul>
              <a href="https://campus.tinka.world" class="btn-buy">Start Now</a>
            </div>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection