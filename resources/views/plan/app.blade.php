@extends('layouts.master')

@section('title')
TiNKA App
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
          <li>TiNKA App Fees</li>
        </ol>
        <h2>TiNKA App Fees</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>Fees</h2>
          <p>TiNKA App</p>
        </header>

        @if($plans)
        <div class="row gy-4 aos-init aos-animate" data-aos="fade-left">

          @foreach($plans as $plan)

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">{{ $plan['name'] }}</h3>
              <div class="price"><sup>RM</sup>{{ $plan['price'] }}<span> / hour</span></div>
              <img src="{{ asset('assets/img/home-tuition.png') }}" class="img-fluid" alt="">
              <ul>
                <li>{{ $plan['description'] }}</li>
                <li class="na">Sign up fee</li>
                <li class="na">Exam fee</li>
              </ul>
              <a href="{{ route('fee.home-tuition.show', $plan['id']) }}" class="btn-buy">Choose</a>
            </div>
          </div>

          @endforeach
        </div>
        @else
        No pricing available
        @endif

      </div>
    </section>

    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tinka App</h3>
              <h2>The future of learning is here!</h2>
              <p>Now your child is able to learn practically anywhere. Our app are engaging, immersive, interactive and most importantly fun!</p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Available Soon</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/apps.png') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection