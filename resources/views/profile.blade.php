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

    <section>

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs aos-init aos-animate" data-aos="fade-up">
          <div class="col-lg-12">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
            
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab2">Subscription</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Payments</a>
              </li>
              @if(isset($profile))
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab1">Profile</a>
              </li>
              @endif
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade" id="tab1">
                @if(isset($profile))
                <table class="table">
                    <tr>
                        <td>Date of Birth</td>
                        <td>{{ $profile->birthday }}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{ ucfirst($profile->gender) }}</td>
                    </tr>
                    <tr>
                        <td>Qualification</td>
                        <td>{{ strtoupper($profile->qualification) }}</td>
                    </tr>
                    @if($user['role'] == 'teacher')
                    <tr>
                        <td>Curently teaching</td>
                        <td>{{ strtoupper($profile->teaching) }}</td>
                    </tr>
                    <tr>
                        <td>Current School</td>
                        <td>{{ strtoupper($profile->current_school) }}</td>
                    </tr>
                    <tr>
                        <td>Current Tuition Center</td>
                        <td>{{ strtoupper($profile->current_tuition) }}</td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td>{{ ucfirst($profile->subject) }}</td>
                    </tr>
                    @endif

                    @if($user['role'] == 'student')
                    <tr>
                        <td>Father/Mother/Guardian's name</td>
                        <td>{{ strtoupper($profile->father_name) }}</td>
                    </tr>
                    <tr>
                        <td>Father/Mother/Guardian's contact No.</td>
                        <td>{{ strtoupper($profile->mother_name) }}</td>
                    </tr>
                    <tr>
                        <td>Current School</td>
                        <td>{{ strtoupper($profile->current_school) }}</td>
                    </tr>
                    <tr>
                        <td>Subject Interested</td>
                        <td>{{ ucfirst($profile->interest) }}</td>
                    </tr>
                    @endif
                </table>
                @else
                <p>No profile available. <a class="btn btn-success" href="{{ route('create-profile', $user['id']) }}">Create new profile</a></p>
                @endif
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade active show" id="tab2">
                @if(isset($user->subscriptions))
                <table class="table">
                    <thead>
                        <th>Category</th>
                        <th>Package</th>
                        <th>Student Name</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Expiry</th>
                        <th>Action</th>
                    </thead>
                    @foreach($user->subscriptions as $subscription)
                    <tr>
                        <td class="text-uppercase">{!! str_replace("-", " ", $subscription->plan->category) !!}</td>
                        <td>{!! $subscription->plan->name !!}</td>
                        <td>{!! $subscription->student_name !!}</td>
                        <td>{!! \Carbon\Carbon::parse($subscription['starts_at'])->format('d/m/Y') !!} - {!! \Carbon\Carbon::parse($subscription['ends_at'])->format('d/m/Y') !!}</td>
                        @if(\Carbon\Carbon::now() < $subscription['ends_at'])
                        <td>{!! $subscription->is_cancelled == 1 ? '<button class="btn btn-sm btn-warning">Cancelled</button>' : '<button class="btn btn-sm btn-success">Active</button>' !!}</td>
                        @else
                        <td><button class="btn btn-sm btn-danger">Expired</button></td>
                        @endif
                        <td>{!! \Carbon\Carbon::parse($subscription['ends_at'])->diffForHumans() !!}</td>
                        <td><a href="{{ url('subscription', $subscription->id) }}" class="btn btn-primary btn-sm">Details</a></td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No subscription yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="tab3">
                @if(isset($user->payments))
                <table class="table">
                    <thead>
                        <th>Order #</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Amount (RM)</th>
                        <th>Action</th>
                    </thead>
                    @foreach($user->payments as $payment)
                    <tr>
                        <td>{!! $payment['billplz_id'] !!}</td>
                        <td>{!! ucfirst($payment['status']) !!}</td>
                        <td>{!! $payment['description'] !!}</td>
                        <td>{!! number_format($payment['amount'],2) !!}</td>
                        <td>@if($payment['status'] != 'active')
                            <a href="{!! $payment['url'] !!}" class="btn btn-sm btn-primary" target="_blank">Pay</a>
                            @else
                            <a href="{!! $payment['url'] !!}" class="btn btn-sm btn-success" target="_blank">Invoice</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No payment details yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

            </div>

          </div>

        </div><!-- End Feature Tabs -->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      {{-- @if(isset($profile))
                        <img src="{{ Storage::url('uploads/avatars/'.$profile['avatar']) }}" alt="{{ $user['name'] }}" class="rounded-circle" width="150">
                      @else --}}
                        <img src="https://ui-avatars.com/api/?name={!! urlencode($user['name']) !!}" alt="{{ $user['name'] }}" class="rounded-circle" width="150">
                      {{-- @endif --}}
                        <div class="mt-3">
                            <h4>{!! $user['name'] !!}</h4>
                            <p class="text-secondary mb-1">{!! ucfirst($user['role']) !!}</p>
                            <p class="text-secondary mb-1">{!! $user['email'] !!}</p>
                            <a class="btn btn-success" href="{{ route('change-password', $user['id']) }}">Change Password</a>
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

      </div>

    </section>

@include('footer')
@endsection