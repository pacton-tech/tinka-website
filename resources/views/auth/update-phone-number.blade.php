@extends('layouts.auth')

@section('content')
<section id="values" class="values" style="background-image: {{asset('assets/css/img/hero-bg.png') }}">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ env('APP_NAME') }}</h2>
          <p>{{ __('Update Phone Number') }}</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-lg-4">
                <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="background-color: #ffffff">
                <img src="{{ asset('assets/img/tinka.png') }}" class="img-fluid" alt="">
                <p>{{ __('Now you can received renewal invoice notification through SMS. Just update your phone number here. Make sure you are using the correct email address that has been registered in Tinka.') }}</p>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
  
                @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif

                    <form method="POST" action="{{ route('process.update.phone.number') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-mail Address') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input id="phone-number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone-number" placeholder="{{ __('Phone Number') }}">

                            @error('phone-number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input type="hidden" name="g-recaptcha-response" id="recaptcha">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update my phone number') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

      </div>

    </section>

@endsection

@push('js')
<script src="https://www.google.com/recaptcha/api.js?render={{ env('NOCAPTCHA_SITEKEY') }}"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('{{ env('NOCAPTCHA_SITEKEY') }}', {action: 'contact'}).then(function(token) {
      if (token) {
        document.getElementById('recaptcha').value = token;
      }
    });
  });
</script>
@endpush