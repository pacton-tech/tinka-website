@extends('layouts.master')

@section('title')
{{ __("Teacher Registration") }}
@endsection

@section('content')

@include('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container"></div>
    </section><!-- End Breadcrumbs -->

    <section id="about" class="about">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">
          <header class="section-header" data-aos="fade-left" data-aos-delay="100">
            <h2>{{ __("Register") }}</h2>
            <p>{{ __("Welcome Tink-Educator!") }}</p>
          </header>
          <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>{{ __("We want you!") }}</h3>
              <h2>{{ __("Do you have what it takes to be a tutor on our platform?") }}</h2>
              <p>{{ __("If you are a subject matter expert in your field, you can register with us by filling up the form below. You may refer to the content quality checklist document fromt the button below. Please share with us your video (between 3 to 5 minutes) by uploading a video or share the video URL (YouTube)") }}</p>
              <div class="text-center text-lg-start">
                <a href="{{ asset('assets/Course-Quality-Checklist.pdf') }}" class="btn btn-danger" target="_blank">
                  {{ __("Content Quality Checklist") }}
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/qualitychecklist.png') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

    <section id="contact" class="contact">
      <div class="container">
        
        <div class="row">
          @if($errors->any())
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
        </div>
          <form id="survey-form" data-aos="zoom-in" data-aos-delay="100" class="php-email-form" method="post" action="{{ route('create-teacher') }}" enctype="multipart/form-data">
            <div class="row gy-4">
            @csrf
            <div class="col-lg-4">
              <h4>{{ __("Personal Information") }}</h4>
              <div class="form-group mb-2">
                <label id="fullname-label" for="fullname">{{ __("Full Name") }}</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" {{ $errors->has('name') ? 'has-error' : '' }} value="{{ old('name') }}" required/>
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>

              <div class="form-group">
                <label id="gender-label" for="gender">{{ __("Gender") }}</label>
                <p>
                  <input name="gender" value="male" type="radio" class="input-radio" checked {{ $errors->has('gender') ? 'has-error' : 'checked' }} required/>{{ __("Male") }}
                  <input name="gender" value="female" type="radio" class="input-radio" {{ $errors->has('gender') ? 'has-error' : 'checked' }} />{{ __("Female") }}
                </p>
                <span class="text-danger">{{ $errors->first('gender') }}</span>
              </div>

              <div class="form-group mb-2">
                <label id="birthday" for="birthday">{{ __("Date of birth") }}</label>
                <input type="date" name="birthday" id="birthday" class="form-control" {{ $errors->has('birthday') ? 'has-error' : '' }} value="{{ old('birthday') }}" required/>
                <span class="text-danger">{{ $errors->first('birthday') }}</span>
              </div>

              <div class="form-group mb-2">
                <label id="email-label" for="email">{{ __("Email") }}</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" {{ $errors->has('email') ? 'has-error' : '' }} value="{{ old('email') }}" required/>
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>

              <div class="form-group mb-2">
                <label id="password-label" for="password">{{ __("Password") }}</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" value="{{ old('password') }}" required/>
                <span class="text-danger">{{ $errors->first('password') }}</span>
              </div>

              <div class="form-group mb-2">
                <label id="confirmpassword-label" for="confirmpassword">{{ __("Repeat Password") }}</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Re-enter your password" value="{{ old('confirmpassword') }}" required/>
                <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
              </div>

              <div class="form-group">
                <label id="photo-label" for="photo">{{ __("Your Photo") }}</label>
                <input type="file" name="photo" id="photo" class="form-control" required accept="image/*"/>
                <span class="text-danger">{{ $errors->first('photo') }}</span>
              </div>
            </div>

            <div class="col-lg-4">
              <h4>{{ __("Education/Qualification") }}</h4>
 
              <div class="form-group mb-2">
                <label id="qualification-label" for="qualification">{{ __("Last Qualification") }}</label>
                <select id="dropdown" name="qualification" class="form-control" required>
                  <option disabled selected value>{{ __("Select qualification") }}</option>
                  <option value="spm">SPM</option>
                  <option value="diploma">Diploma</option>
                  <option value="degree">Bachelor Degree</option>
                  <option value="master">Master</option>
                  <option value="phd">PhD</option>
                </select>
                <span class="text-danger">{{ $errors->first('qualification') }}</span>
              </div>
              
              <div class="form-group mb-2">
                <label id="teaching-label" for="teaching">{{ __("Are you currently teaching at any school?") }}</label>
                <select id="dropdown" name="teaching" class="form-control" required>
                  <option disabled selected value>{{ __("- Choose -") }}</option>
                  <option value="yes">{{ __("Yes") }}</option>
                  <option value="no">{{ __("No") }}</option>
                </select>
                <span class="text-danger">{{ $errors->first('teaching') }}</span>
              </div>
            
              <div class="form-group mb-2">
                <label id="current_school-label" for="current_school">{{ __("Your current school name") }}</label>
                <input type="text" name="current_school" id="current_school" class="form-control" placeholder="School Name" {{ $errors->has('current_school') ? 'has-error' : '' }} value="{{ old('current_school') }}"/>
                <span class="text-danger">{{ $errors->first('current_school') }}</span>
              </div>
          
              <div class="form-group mb-2">
                <label id="tuition">{{ __("Are you currently teaching at any tuition centre?") }}</label>
                <select id="dropdown" name="tuition" class="form-control" required>
                  <option disabled selected value>{{ __("- Choose -") }}</option>
                  <option value="yes">{{ __("Yes") }}</option>
                  <option value="no">{{ __("No") }}</option>
                </select>
                <span class="text-danger">{{ $errors->first('tuition') }}</span>
              </div>
            
              <div class="form-group mb-2">
                <label id="current_tuition-label" for="current_tuition">{{ __("If yes, please state the name of the tuition centre") }}</label>
                <input type="text" name="current_tuition" id="current_tuition" class="form-control" placeholder="Tuition Centre Name"/>
              </div>
            
              <div class="form-group">
                <label id="subject-label" for="subject">{{ __("Subject that you are teaching (seperate by comma)") }}</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Please state the name of the subjects that you are teaching" required/>
                <span class="text-danger">{{ $errors->first('subject') }}</span>
              </div>
            </div>
            
            <div class="col-lg-4">
              <h4>{{ __("Sample video") }}</h4>
              
              <div class="form-group mb-2">
                <label id="video-label" for="photo">{{ __("Upload Video") }}</label>
                <input type="file" name="video" id="video" class="form-control" accept="video/*"/>
                <span class="text-danger">{{ $errors->first('video') }}</span>
              </div>

              <div class="form-group mb-2">
                <label id="youtube-label" for="subject">{{ __("YouTube URL") }}</label>
                <input type="text" name="youtube" id="youtube" class="form-control" placeholder="Please paste the URL of your video"/>
                <span class="text-danger">{{ $errors->first('youtube') }}</span>
              </div>
              <div class="alert alert-info">{{ __("Please upload or paste your video here") }}</div>
              <small>{{ __("By submitting this form, you agree to our") }} <a href="{{ asset('assets/TiNKA - Schedule 1 (Terms & Conditions of Subscription).pdf') }}">{{ __("Term and Condition") }}</a></small>
              <div class="form-group mb-2">
                <button type="submit" id="submit" class="btn btn-primary">{{ __("Submit") }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </section>
  </main><!-- End #main -->
@include('footer')
@endsection