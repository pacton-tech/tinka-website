@extends('layouts.master')

@section('title')
TiNKA Home Tuition
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
          <li>Home Tuition Fees</li>
        </ol>
        <h2>Tinka Home Tuition Fees</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>Fees</h2>
          <p>Home Tuition</p>
        </header>

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
              <a href="#" class="btn-buy">Choose</a>
            </div>
          </div>

          @endforeach

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection