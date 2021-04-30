@extends('layouts.master')

@section('title')
Subscription Upgrade
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
            <h2>Subscription Upgrade</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row gy-4">
            @if(!is_array($plan))
            No available upgrade for this package
            @else
            @foreach($plan as $data)
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>{{ $data->name }}</h3>
                        <h4>RM {{ $data->price }}/{{ $data->invoice_interval }}</h4>
                        {{ $data->description }}
                        <p>Subjects Offered: {{ $data->subjects }}</p>
                        <a href="{{ url('plan', $data->id) }}" class="btn btn-primary">Choose</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        @endif
    </section>

</main><!-- End #main -->

@include('footer')
@endsection