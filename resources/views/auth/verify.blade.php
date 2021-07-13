@extends('layouts.auth')

@section('content')
<section id="values" class="values" style="background-image: {{asset('assets/css/img/hero-bg.png') }}">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ env('APP_NAME') }}</h2>
          <p>{{ __('Verify Your Email Address') }}</p>
        </header>

        <div class="row justify-content-center">

            <div class="col-lg-4">
                <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="background-color: #ffffff">
                    <img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="">

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
