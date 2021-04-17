@extends('layouts.master')

@section('title')
Home Tuition Details
@endsection

@section('content')

@include('header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Home</a></li>
          <li><a href="#">Fees</a></li>
          <li>Home Tuition Fees</li>
        </ol>
        <h2>Home Tuition Fees</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0 row justify-content-md-center">

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Plan Details</h3>
              <h2>{{ $plan['name'] }}</h2>
              <p>{{ $plan['description'] }}</p>
              <h3>Subscription details</h3>
              <ul>
                <li>Price: RM {{ $plan['price'] }}/hour</li>
                <li>Renewal: N/A</li>
              </ul>
              
              <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Checkout</h4>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="put" action="{{ url('payment/create') }}" name="checkout">
            @csrf
              @auth
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
              <p class="text-mute">Name: {{ auth()->user()->name }}<br>
                E-mail: {{ auth()->user()->email }}</p>
              @endauth

              @guest
              <div class="alert alert-info">
                If you're already registered, you can login <a href="/login">here</a>
              </div>
              <div class="mb-3">
                <label for="firstName">Full name <span class="text-muted">(Required)</span></label>
                <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'has-error' : '' }} value="{{ old('name') }}">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Required)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com" {{ $errors->has('email') ? 'has-error' : '' }} value="{{ old('email') }}">
              <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            @endguest

            @php
            $extra = $plan['signup_fee'] + $plan['exam_fee'];
            @endphp
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="agree">
              <label class="custom-control-label" for="agree" name="agree">I agree to the <a href="{{ url('terms-and-conditions') }}" target="_blank" required>{{ env('APP_NAME') }}'s terms and conditions</a></label>
            </div>
            <span class="text-danger">{{ $errors->first('agree') }}</span>
            <input type="hidden" name="plan_id" value="{{ $plan['id'] }}">
            <input type="hidden" name="extra_amount" value="{{ $extra }}">
            <input type="hidden" name="price" value="{{ $plan['price'] }}">
            <input type="hidden" name="category" value="{{ $plan['category'] }}">
        </div>
      </div>
      <hr class="mb-4">
              <div class="text-center text-lg-start">
                <button class="btn btn-primary">
                  <span>Subscribe</span>
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>
              <p><img height="24px" src="https://cdn02.billplz.com/assets/v1/Billplz_Blue-3153732736cf969cb5d2e23e3e8fa4b3e2292b87d4b19b581b27ee93940b0bc2.svg"> is the payment gateway provider. By subscribing to this service, you are subject to bind with their <a href="https://www.billplz.com/privacy" target="_blank">terms and conditions</a></p>
            </div>
          </div>
</form>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection