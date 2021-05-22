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

        <div class="row">
            <div class="col-lg-3 mb-3">
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
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <h4> Create new user to access Tinka App</h4>
                            <form action="{{ route('app-create-user') }}" method="post" class="">
                            @csrf
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group mb-2">
                                    <label>Name</label>
                                    <input type="fullname" class="form-control" name="fullname" placeholder="fullname" {{ $errors->has('fullname') ? 'has-error' : '' }} value="{{ $user['name'] ?? old('fullname') }}">
                                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Username</label>
                                    <input type="username" class="form-control" name="username" placeholder="username" {{ $errors->has('username') ? 'has-error' : '' }} value="{{ old('username') }}">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password" {{ $errors->has('password') ? 'has-error' : '' }} value="{{ old('password') }}">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <?php
                                switch ($user['role']) {
                                    case 'teacher':
                                        $type = 'teacher';
                                        break;
                                    case 'student':
                                        $type = 'student';
                                        break;
                                    default:
                                        $type = 'student';
                                        break;
                                }
                                ?>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="type" value="{{ $type }}">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <h5>Get the app here</h5>
                            <a href="https://www.apple.com/my/app-store/" target="_blank"><img src="{{ asset('assets/img/appstore.png') }}" alt="" width="150"></a> 
                            <a href="https://play.google.com/store/apps/details?id=tech.pacton.tinka" target="_blank"><img src="{{ asset('assets/img/playstoreg.png') }}" alt="" width="150"></a>
                            <p>Access the app by creating new username and password. This credential is not the same as your existing Tinka login.</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>

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
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab4">App Access</a>
              </li>
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
                <div class="table-responsive">
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
                </div>
                @else
                <p>No subscription yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="tab3">
                @if(isset($user->payments))
                <div class="table-responsive">
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
                </div>
                @else
                <p>No payment details yet. Let's take a look at available <a href="{{ url('plan') }}">subscription</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade" id="tab4">
                @if($app)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Type</th>
                            <th>Action</th>
                        </thead>
                        @foreach($app as $access)
                        <tr>
                            <td>{!! $access['fullname'] !!}</td>
                            <td>{!! $access['username'] !!}</td>
                            <td>{!! $access['type'] !!}</td>
                            <td>
                                <a href="{{ route('app-change-password', $access['id']) }}" class="btn btn-sm btn-success">Change password</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @else
                <p>No access to Tinka App yet. Create one <a href="{{ url('plan') }}">here</a>.</p>
                @endif
              </div><!-- End Tab 2 Content -->

            </div>

          </div>

        </div><!-- End Feature Tabs -->

      </div>

    </section>

@include('footer')
@endsection