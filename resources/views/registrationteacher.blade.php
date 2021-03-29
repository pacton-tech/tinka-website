@extends('layouts.master')

@section('title')
Teacher Registration
@endsection

@push('css')
<link href="{{ asset('assets/css/registrationform.css') }}" rel="stylesheet">
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
              <header class="section-header" data-aos="fade-left" data-aos-delay="100">
                <h2>Register</h2>
                <p>Welcome Tink-Educator!</p>
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
            <form id="survey-form" data-aos="zoom-in" data-aos-delay="100" class="register" method="post" action="{{ route('create-teacher') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label id="fullname-label" for="fullname">Full Name</label>
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
                <label id="gender-label" for="gender">Gender</label>                
                  <label>
                    <input
                    name="gender"
                    value="mobile-nav-toggle"
                    type="radio"
                    class="input-radio"
                    checked
                    {{ $errors->has('gender') ? 'has-error' : 'checked' }}
                  />Male</label
                >
                <label>
                  <input
                    name="gender"
                    value="female"
                    type="radio"
                    class="input-radio"
                    {{ $errors->has('gender') ? 'has-error' : 'checked' }}
                  />Female</label
                >
                <span class="text-danger">{{ $errors->first('gender') }}</span>
              </div>

              <div class="form-group">
                <label id="birthday" for="birthday"
                  >Date of birth</label
                >
                <input
                  type="date"
                  name="birthday"
                  id="birthday"
                  class="form-control"
                  {{ $errors->has('birthday') ? 'has-error' : '' }} value="{{ old('birthday') }}"
                />
                <span class="text-danger">{{ $errors->first('birthday') }}</span>
              </div>

              <div class="form-group">
                <label id="email-label" for="email">Email</label>
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
                <label id="password-label" for="password">Password</label>
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
                <label id="confirmpassword-label" for="confirmpassword">Repeat Password</label>
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
                <label id="qualification-label" for="qualification">Last Qualification</label>
                <select id="dropdown" name="qualification" class="form-control" >
                  <option disabled selected value>Select qualification</option>
                  <option value="spm">SPM</option>
                  <option value="diploma">Diploma</option>
                  <option value="degree">Bachelor Degree</option>
                  <option value="master">Master</option>
                  <option value="phd">PhD</option>
                </select>
                <span class="text-danger">{{ $errors->first('qualification') }}</span>
              </div>
              
              <div class="form-group">
                <label id="teaching-label" for="teaching">Are You Currently Teaching At Any School?</label>
                <select id="dropdown" name="teaching" class="form-control" >
                  <option disabled selected value>- Choose -</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
                <span class="text-danger">{{ $errors->first('teaching') }}</span>
              </div>
             
              <div class="form-group">
                <label id="current_school-label" for="current_school">Your Current School Name</label>
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
                <label id="tuition">Are You Currently Teaching At Any Tuition Centre?</label>
                <select id="dropdown" name="tuition" class="form-control" >
                  <option disabled selected value>- Choose -</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
                <span class="text-danger">{{ $errors->first('tuition') }}</span>
              </div>
             
              <div class="form-group">
                <label id="current_tuition-label" for="current_tuition">If Yes, Please State The Name Of The Tuition Centre</label>
                <input
                  type="text"
                  name="current_tuition"
                  id="current_tuition"
                  class="form-control"
                  placeholder="Tuition Centre Name"
                />
              </div>
            
              <div class="form-group">
                <label id="subject-label" for="subject">Subject That You Are Teaching (seperate by comma)</label>
                <input
                  type="text"
                  name="subject"
                  id="subject"
                  class="form-control"
                  placeholder="Please state the name of the subjects that you are teaching"
                />
                <span class="text-danger">{{ $errors->first('subject') }}</span>
              </div>

              <div class="form-group">
                <label id="photo-label" for="photo">Your Photo</label>
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
                  Submit
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