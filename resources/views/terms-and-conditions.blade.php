@extends('layouts.master')

@section('title')
{{ __("Terms and Conditions") }}
@endsection

@section('content')

@include('header')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">{{ __("Home") }}</a></li>
        <li>{{ __("Documents") }}</li>
      </ol>
      <h2>{{ __("Terms and Conditions") }}</h2>

    </div>
  </section><!-- End Breadcrumbs -->

<body>
   <!-- ======= About Tinka Section ======= -->
   <section>
      
    <div class="container">
      <div class="row">
        <div class="card col-lg-12">
          <h1>Clause 1</h1>

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  </main><!-- End #main -->

@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
