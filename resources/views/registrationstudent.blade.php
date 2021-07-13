@extends('layouts.master')

@section('title')
{{ __("Student Registration") }}
@endsection

@push('css')
<link href="{{ asset('assets/css/studentform.css') }}" rel="stylesheet">
@endpush

@section('content')

@include('header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
                <header class="section-header" data-aos="fade-right" data-aos-delay="100">
                    <h2>{{ __("Register") }}</h2>
                    <p>{{ __("Hello Future Tinkers!") }}</p>
                  </header>
                  <div class="row justify-content-md-center">
              <div class="col-lg-6">
                   @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                  <form id="survey-form" data-aos="zoom-in" data-aos-delay="100" class="register" method="post" action="{{ route('create-student') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label id="fullname-label" for="fullname">{{ __("Full Name") }}</label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Enter your name"
                        {{ $errors->has('name') ? 'has-error' : '' }} value="{{ old('name') }}"
                      />
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
      
                    <div class="form-group">
                    <label id="gender-label" for="gender">{{ __("Gender") }}</label>                
                      <label>
                        <input
                          name="gender"
                          value="mobile-nav-toggle"
                          type="radio"
                          class="input-radio"
                          checked
                          {{ $errors->has('gender') ? 'has-error' : 'checked' }}
                        />{{ __("Male") }}</label
                      >
                      <label>
                        <input
                          name="gender"
                          value="female"
                          type="radio"
                          class="input-radio"
                          {{ $errors->has('gender') ? 'has-error' : 'checked' }}
                        />{{ __("Female") }}</label
                      >
                      <span class="text-danger">{{ $errors->first('gender') }}</span>
                    </div>
      
                    <div class="form-group">
                      <label id="birthday" for="birthday"
                        >{{ __("Date of Birth") }}</label
                      >
                      <input
                        type="date"
                        name="birthday"
                        id="birthday"
                        class="form-control"
                        placeholder=""
                        {{ $errors->has('birthday') ? 'has-error' : '' }} value="{{ old('birthday') }}"
                      />
                      <span class="text-danger">{{ $errors->first('birthday') }}</span>
                    </div>

                    <div class="form-group">
                      <label id="guardian_name" for="guardian_name">{{ __("Father / Mother / Guardian Name") }}</label>
                      <input
                        type="text"
                        name="guardian_name"
                        id="guardian_name"
                        class="form-control"
                        placeholder="Enter your father/mother/guardian name"
                        {{ $errors->has('guardian_name') ? 'has-error' : '' }} value="{{ old('guardian_phone') }}"
                      />
                      <span class="text-danger">{{ $errors->first('guardian_name') }}</span>
                    </div>

                    <div class="form-group">
                      <label id="guardian_phone" for="guardian_phone">{{ __("Father / Mother / Guardian Phone Number") }}</label>
                      <input
                        type="text"
                        name="guardian_phone"
                        id="guardian_phone"
                        class="form-control"
                        placeholder="Enter your father/mother/guardian phone number"
                        {{ $errors->has('guardian_phone') ? 'has-error' : '' }} value="{{ old('guardian_phone') }}"
                      />
                      <span class="text-danger">{{ $errors->first('guardian_phone') }}</span>
                    </div>
      
                    <div class="form-group">
                      <label id="email-label" for="email">{{ __("Email") }}</label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Enter your Email"
                        {{ $errors->has('email') ? 'has-error' : '' }} value="{{ old('email') }}"
                      />
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group">
                      <label id="password-label" for="password">{{ __("Password") }}</label>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Enter your password"
                        value="{{ old('password') }}"
                      />
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>

                    <div class="form-group">
                      <label id="confirmpassword-label" for="confirmpassword">{{ __("Repeat Password") }}</label>
                      <input
                        type="password"
                        name="confirmpassword"
                        id="confirmpassword"
                        class="form-control"
                        placeholder="Re-enter your password"
                        value="{{ old('confirmpassword') }}"
                      />
                      <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                    </div>
                                 
                    <div class="form-group">
                <label id="current_school-label" for="current_school">{{ __("Your Current School Name") }}</label>
                <input
                  type="text"
                  name="current_school"
                  id="current_school"
                  class="form-control"
                  placeholder="School Name"
                  {{ $errors->has('current_school') ? 'has-error' : '' }} value="{{ old('current_school') }}"
                />
                <span class="text-danger">{{ $errors->first('current_school') }}</span>
              </div>
                
                    <div class="form-group">
                      <label id="classroom" for="classroom">{{ __("Classes That You Are Interested In") }}</label>
                      <select id="dropdown" name="classroom" class="form-control">
                        <option disabled selected value>{{ __("- Choose -") }}</option>
                        <option value="physical tuition">{{ __("Physical Tuition") }}</option>
                        <option value="online class">{{ __("Online Class") }}</option>
                        <option value="home tuition">{{ __("Home Tuition") }}</option>
                      </select>
                      <span class="text-danger">{{ $errors->first('classroom') }}</span>
                    </div>
      
                    <div class="form-group">
                      <label id="photo-label" for="photo">{{ __("Your Photo") }}</label>
                      <input
                        type="file"
                        name="photo"
                        id="photo"
                        class="form-control"
                      />
                      <span class="text-danger">{{ $errors->first('photo') }}</span>
                    </div>
      
              <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                  {{ __("Submit") }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('footer')
@endsection