@extends('layouts.master')

@section('title')
Change App Password
@endsection

@section('content')

@include('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="#">Profile</a></li>
        </ol>
        <h2>Change App Password</h2>

      </div>
    </section><!-- End Breadcrumbs -->

 
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
      	<h4>Change your app password</h4>
        <div class="col-lg-6">
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
            <div class="row gy-4">

              @if ($errors->any())
		          <div class="alert alert-danger">
		              <ul>
		                  @foreach ($errors->all() as $error)
		                      <li>{{ $error }}</li>
		                  @endforeach
		              </ul>
		          </div>
		          @endif

              <form action="{{ route('app-update-user') }}" method="post" class="">
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
                        <input type="fullname" class="form-control" name="fullname" placeholder="fullname" {{ $errors->has('fullname') ? 'has-error' : '' }} value="{{ $app_user['fullname'] ?? old('fullname') }}">
                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                    </div>
                    <div class="form-group mb-2">
                        <label>Username</label>
                        <input type="username" class="form-control" name="username" placeholder="username" readonly value="{{ $app_user->username }}">
                    </div>
                    <div class="form-group mb-2">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" {{ $errors->has('password') ? 'has-error' : '' }} value="{{ old('password') }}">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="type" value="student">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('view-profile', auth()->user()->id) }}" class="btn btn-secondary">Back to Dashboard</a>
                </form>

            </div>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->
  </main><!-- End #main -->

@include('footer')
@endsection