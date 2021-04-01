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

    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Plan Details</h3>
              <h2>{{ $plan['name'] }}</h2>
              <p>{{ $plan['description'] }}</p>
              <h3>Subscription details:</h3>
              <ul>
                <li>Price: RM {{ $plan['price'] }}/month</li>
                <li>Sign-up fee: RM {{ $plan['signup_fee'] }}</li>
                <li>Trial period: {{ $plan['trial_period'].' '.$plan['trial_interval'] }}</li>
                <li>Renewal: Every {{ $plan['invoice_period'].' '.$plan['invoice_interval'] }}</li>
              </ul>
              <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Checkout</h4>
          <form method="put" action="{{ url('payment/create') }}">
            @csrf
              @auth
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
              <p class="text-mute">Name: {{ auth()->user()->name }}<br>
                E-mail: {{ auth()->user()->email }}</p>
              @endauth

              @guest
              <div class="mb-3">
                <label for="firstName">Full name <span class="text-muted">(Required)</span></label>
                <input type="text" class="form-control" id="name" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid name is required.
                </div>
              </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Required)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for invoice.
              </div>
            </div>
            @endguest

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="agree">
              <label class="custom-control-label" for="agree" name="agree">I agree to the <a href="{{ url('terms-and-conditons') }}" target="_blank">{{ env('APP_NAME') }}'s terms and conditions</a></label>
            </div>
            <input type="hidden" name="plan_id" value="{{ $plan['id'] }}">
          
        </div>
      </div>
      <hr class="mb-4">
              <div class="text-center text-lg-start">
                <button class="btn btn-primary">
                  <span>Subscribe</span>
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>
              <p><img height="24px" src="https://cdn02.billplz.com/assets/v1/Billplz_Blue-3153732736cf969cb5d2e23e3e8fa4b3e2292b87d4b19b581b27ee93940b0bc2.svg"> is the payment gateway and subject to agreed <a href="https://www.billplz.com/privacy" target="_blank">terms and conditions</a></p>
            </div>
          </div>
</form>
          <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/portfolio/'.$plan['id'].'.png') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection