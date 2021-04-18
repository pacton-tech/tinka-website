@extends('layouts.master')

@section('title')
Subscription Details
@endsection

@section('content')

@include('header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="#">Home</a></li>
                <li>Subscription</li>
            </ol>
            <h2>Subscription Details</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>RM {{ $subscription->plan->price }}/{{ $subscription->plan->invoice_interval }}</h3>
                        <p>{!! \Carbon\Carbon::parse($subscription->starts_at)->format('d/m/Y') !!} - {!! \Carbon\Carbon::parse($subscription->ends_at)->format('d/m/Y') !!}</p>
                        <label class="label label-success">Expiry {!! \Carbon\Carbon::parse($subscription->ends_at)->diffForHumans() !!}</label>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>{{ $subscription->plan->name }}</h3>
                        <h2>{{ $subscription->plan->description }}</h2>
                        <p>Subjects</p>
                        @php $subject = explode(', ', $subscription->subjects); @endphp
                        <ul>
                            @foreach($subject as $sub)
                            <li>{!! $sub !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
      </div>
    </section>

</main><!-- End #main -->

@include('footer')
@endsection