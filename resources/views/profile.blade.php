@extends('layouts.master')

@section('title')
Profile
@endsection

@section('content')
@include('mainheader')

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

    <!-- Profile Section -->
    <section class="profile">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://vgraphs.com/images/agents/jett-avatar.jpg" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                            <h4>Hakim Danial</h4>
                            <p class="text-secondary mb-1">Biology Teacher</p>
                            <p class="text-muted font-size-sm">Shah Alam, Selangor</p>
                            <button class="btn btn-primary">Edit Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        Hakim Danial
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        Male
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Birthdate</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        19/9/1997
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        example@email.com
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        testusername
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        **********
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Last Qualification</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        PhD
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Currently Teaching At Any School</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        Yes
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Current School Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        SMK Seksyen 9, Shah Alam
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Currently Attached To Any Tuition Centre</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        No
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Tuition Centre Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        -
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Subject Currently Teaching</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        Biology
                        </div>
                    </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- End Profile Section -->

@include('footer')
@endsection