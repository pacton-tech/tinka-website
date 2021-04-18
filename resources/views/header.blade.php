<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/Tinka (1).png') }}" alt="">
        <span>TiNKA</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li class="dropdown"><a href="/about"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about">About Tinka</a></li>
              <li><a href="/tinkaleadership">Tinka Leadership</a></li>
              <li><a href="/blog">Tinka News</a></li>
            </ul>
          <li class="dropdown" ><a href="#"><span>Product & Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/tinkaeducentre">Tinka Educentre</a></li>
              <li><a href="/tinkaapp">Tinka App</a></li>
              <li><a href="/teachers">Tinka Teachers</a></li>
            </ul>
          <li class="dropdown" ><a href="#"><span>Fees</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/fees/educentre">Tinka Educentre</a></li>
              <li><a href="/fees/home-tuition">Home Tuition</a></li>
              <li><a href="/fees/app">Tinka App</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Join Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/register/teacher">Tink-Educator</a></li>
              <li><a href="/register">Future Tinkers</a></li>
          
            </ul> 
          <li><a class="nav-link scrollto" href="/en/blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
          @auth
          <li><a class="getstarted" href="{{ route('view-profile', auth()->user()->id) }}">Dashboard</a></li>
          @endauth

          @guest
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li>
          @endguest
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>