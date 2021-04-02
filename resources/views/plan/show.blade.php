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
              <h3>Subscription details</h3>
              <ul>
                <li>Price: RM {{ $plan['price'] }}/subject</li>
                <li>Annual Registration: RM {{ $plan['signup_fee'] }}</li>
                <li>Exam and Notes: RM {{ $plan['exam_fee'] }}</li>
                <li>Renewal: Every {{ $plan['invoice_period'].' '.$plan['invoice_interval'] }}</li>
              </ul>
              
              <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Checkout</h4>
          @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
                @php
                    Session::forget('error');
                @endphp
            </div>
            @endif
          <form method="put" action="{{ url('payment/create') }}" name="checkout">
            <h3>Subject Selection</h3>
              <?php $subject = explode(',', $plan['subjects']); ?>
              <div class="custom-control custom-checkbox mb-3">
                @foreach($subject as $key => $value)
                <input type="checkbox" class="custom-control-input" id="subject-{{ $key }}" name="subject[]" onclick="chkcontrol({{ $key-1 }})" value="{{ $value }}">
                <label class="custom-control-label" for="subject-{{ $key }}" name="agree">{{ $value }}</label>
                @endforeach
              </div>
            @csrf
              @auth
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
              <p class="text-mute">Name: {{ auth()->user()->name }}<br>
                E-mail: {{ auth()->user()->email }}</p>
              @endauth

              @guest
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
            $amount = ($plan['price']*2) + $plan['signup_fee'] + $plan['exam_fee'];
            @endphp
            <h4>Total price: RM {{ number_format($amount,2) }}</h4>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="agree">
              <label class="custom-control-label" for="agree" name="agree">I agree to the <a href="{{ url('terms-and-conditons') }}" target="_blank" required>{{ env('APP_NAME') }}'s terms and conditions</a></label>
            </div>
            <span class="text-danger">{{ $errors->first('agree') }}</span>
            <input type="hidden" name="plan_id" value="{{ $plan['id'] }}">
            <input type="hidden" name="amount" value="{{ $amount }}">
        </div>
      </div>
      <hr class="mb-4">
              <div class="text-center text-lg-start">
                <button class="btn btn-primary">
                  <span>Subscribe</span>
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>
              <div class="alert alert-info mt-2">
                <h5>Disclaimer</h5>
                <ul>
                  <li>4 lesson per month for every subject</li>
                  <li>We reserve the rights to refuce entry into class for late payments</li>
                  <li>Fees must be paid before the second class of the month</li>
                </ul>
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

@push('js')
<script type="text/javascript">
  function chkcontrol(j) {
    var total = 0;
    var max = {{ $plan['maximum_subject'] }};
    for(var i=0; i < document.checkout.subject.length; i++){
      if(document.checkout.subject[i].checked){
        total = total+1;
      }
      if(total > max){
        alert("Please select only " + max + " subject") 
        document.checkout.subject[j].checked = false ;
      return false;
      }
    }
  }
</script>
@endpush