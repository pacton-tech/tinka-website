@extends('layouts.master')

@section('title')
Profile
@endsection

@section('content')

<main id="main">
@include('header')

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Home</a></li>
        <li>Profile</li>
      </ol>
      <h2>Profile</h2>

    </div>
  </section><!-- End Breadcrumbs -->

    <section id="features" class="features">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs aos-init aos-animate" data-aos="fade-up">
          <div class="col-lg-9">
            <h3>Details</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Profile</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Subscription</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Payments</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade active show" id="tab1">
                @if($profile)
                <table>
                    @foreach($profile as $data)
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No profile available</p>
                @endif
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="tab2">
                @if($user->subscriptions)
                <table class="table">
                    <thead>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Fee</th>
                        <th>Start</th>
                        <th>End</th>
                    </thead>
                    @foreach($user->subscriptions as $subscription)
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{!! $subscription['starts_at'] !!}</td>
                        <td>{!! $subscription['ends_at'] !!}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No subscription yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="tab3">
                @if($user->payments)
                <table class="table">
                    <thead>
                        <th>Order #</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Amount (RM)</th>
                        <th>Paid (RM)</th>
                        <th>Action</th>
                    </thead>
                    @foreach($user->payments as $payment)
                    <tr>
                        <td>{!! $payment['billplz_id'] !!}</td>
                        <td>{!! ucfirst($payment['status']) !!}</td>
                        <td>{!! $payment['description'] !!}</td>
                        <td>{!! number_format($payment['amount'],2) !!}</td>
                        <td>{!! number_format($payment['paid'],2) !!}</td>
                        <td>@if($payment['status'] != 'paid')
                            <a href="{!! $payment['url'] !!}" class="btn btn-sm btn-primary" target="_blank">Pay</a>
                            @else
                            <a href="{!! $payment['url'] !!}" class="btn btn-sm btn-success" target="_blank">Invoice</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No subscription yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

            </div>

          </div>

          <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://ui-avatars.com/api/?name={!! urlencode($user['name']) !!}" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4>{!! $user['name'] !!}</h4>
                            <p class="text-secondary mb-1">{!! $user['role'] !!}</p>
                            <button type="button" class="btn btn-primary">{!! $user['email'] !!}</button>
                            <a class="btn btn-secondary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div><!-- End Feature Tabs -->

        

      </div>

    </section>

@include('footer')
@endsection