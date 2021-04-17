@extends('layouts.auth')

@section('content')

<section id="values" class="values">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ env('APP_NAME') }}</h2>
          <p>{{ __('Reset Password') }}</p>
        </header>

        <div class="row justify-content-center">

            <div class="col-lg-4">
                <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group mb-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
