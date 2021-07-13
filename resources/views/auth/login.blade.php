@extends('layouts.auth')

@section('content')
<section id="values" class="values" style="background-image: {{asset('assets/css/img/hero-bg.png') }}">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ env('APP_NAME') }}</h2>
          <p>{{ __('Login') }}</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-lg-4">
                <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="background-color: #ffffff">
                <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
                    <form method="POST" action="{{ route('login') }}">
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                             <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <p><a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></p>
                        @endif
                        @if (Route::has('register'))
                        <p>{{ __('No account yet?') }} 
                            <a href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </form>
                </div>
            </div>

        </div>

      </div>

    </section>

@endsection