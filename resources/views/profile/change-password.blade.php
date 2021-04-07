@extends('layouts.master')

@section('title')
Change Password
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
        <h2>Change Password</h2>

      </div>
    </section><!-- End Breadcrumbs -->

 
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
      	<h4>Change your password</h4>
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

          <form action="{{ route('reset-password') }}" method="post" class="php-email-form">
            @csrf
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



              <div class="col-md-12">
                <input type="password" class="form-control" name="password" placeholder="new password" {{ $errors->has('password') ? 'has-error' : '' }} value="{{ old('password') }}">
                <span class="text-danger">{{ $errors->first('password') }}</span>
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" name="password_confirmation" placeholder="repeat new password" {{ $errors->has('password_confirmation') ? 'has-error' : '' }} value="{{ old('password_confirmation') }}">
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
              </div>
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <button type="submit">Change</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->
  </main><!-- End #main -->

@include('footer')
@endsection