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
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>RM {{ $subscription->plan->price }}/{{ $subscription->plan->invoice_interval }}</h3>
                        @if($subscription->plan->category != 'home-tuition')
                        <p>{!! \Carbon\Carbon::parse($subscription->starts_at)->format('d/m/Y') !!} - {!! \Carbon\Carbon::parse($subscription->ends_at)->format('d/m/Y') !!}</p>
                        <p>Expire {!! \Carbon\Carbon::parse($subscription->ends_at)->diffForHumans() !!}</p>
                        @if(\Carbon\Carbon::now() < $subscription['ends_at'])
                        {!! $subscription->is_cancelled == 1 ? '<button class="btn btn-sm btn-warning">Cancelled</button>' : '<button class="btn btn-sm btn-success">Active</button>' !!}
                        @else
                        <button class="btn btn-sm btn-danger">Expired</button>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Package name: {{ $subscription->plan->name }}</h3>
                        <h4>Description: {{ $subscription->plan->description }}</h4>
                        <h4>Student name: {{ $subscription->student_name }}</h4>
                        @if($subscription->plan->category != 'home-tuition')
                        <p>Subjects:</p>
                        @php $subject = explode(', ', $subscription->subjects); @endphp
                        <ul>
                            @foreach($subject as $sub)
                            <li>{!! $sub !!}</li>
                            @endforeach
                        </ul>
                        <p class="alert alert-info">If you want to add more subject, you need to upgrade your current package to match the new number of subjects requested.</p>
                        @endif
                        <?php
                            $today = \Carbon\Carbon::today();
                            $start_at = \Carbon\Carbon::parse($subscription->ends_at)->startOfMonth()->addMonth();
                            $end_at = $start_at->copy()->endOfMonth();
                            $mid_month = $start_at->subWeek(3);
                        ?>
                        <p class="mt-2">
                            <a href="{{ route('receipt-payment', $subscription->payment_id) }}" class="btn btn-secondary">View Receipt</a>
                            @if($subscription->plan->category != 'home-tuition' && $subscription->is_cancelled != 1)
                            <a href="{{ route('upgrade-subscription', $subscription->id) }}" class="btn btn-primary">Upgrade</a>
                            <!-- check if invoice has been generated -->
                            @if(!$renewal)
                                @if($today > $mid_month)
                                <a href="{{ route('renew-subscription', $subscription->id) }}" class="btn btn-success">Renew</a>
                                @endif
                            @endif
                            {{-- <a href="{{ route('cancel-subscription', $subscription->id) }}" class="btn btn-danger">Cancel</a> --}}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
      </div>
    </section>

</main><!-- End #main -->

@include('footer')
@endsection