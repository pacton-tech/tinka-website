  <!-- ======= Footer ======= -->
  <div class="footer">
   <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-sm-12 footer-links">
            <p>{{ __("Footer-text") }}</p>
            <img src="{{ asset('assets/img/Tinka (1).png') }}" alt="" height="50px" class="img-thumb">

          </div>

          <div class="col-lg-2 col-sm-12 footer-links">
            <h4>{{ __("How To") }}</h4>
            <ul>
              <!-- <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('assets/Tinka Student App- How to.pdf') }}">{{ __("Student App") }}</a></li> -->
              <!-- <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('assets/A complete guide to Tinka App teacher.pdf') }}">{{ __("Teacher App") }}</a></li> -->
              <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('tinka-campus-walkthrough') }}">{{ __("Tinka Campus") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('contact') }}">{{ __("Contact Us") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('faq') }}">FAQ</a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-sm-12 footer-links">
            <h4>{{ __("About Us") }}</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('assets/PDPR Press Release_21012021.pdf') }}" target="_blank">{{ __("Press/Media") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('assets/TiNKA - Schedule 1 (Terms & Conditions of Subscription).pdf') }}" target="_blank">{{ __("Terms & Condition") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('privacy-policy') }}">{{ __("Privacy Policy") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://helpdesk.tinka.world/help-center">{{ __("Help Centre") }}</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-sm-12 footer-links">
            <h4>{{ __("Links") }}</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('login') }}">{{ __("Login") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('password/reset') }}">{{ __("Reset Password") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('register') }}">{{ __("Student Registration") }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('register/teacher') }}">{{ __("Teacher Registration") }}</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3 col-sm-12 footer-links">

               <!-- <div class="app-links">
                 <h4>{{ __("Download Our App Now") }}</h4>
                 <a href="https://www.apple.com/my/app-store/" target="_blank"><img src="{{ asset('assets/img/appstore.png') }}" alt="" width="150"></a>
                 <a href="https://play.google.com/store/apps/details?id=tech.pacton.tinka" target="_blank"><img src="{{ asset('assets/img/playstoreg.png') }}" alt="" width="150"></a>
                </div> -->
            <!-- <div class="social-links mt-3"> -->
            <div class="social-links">
              <h4>{{ __("Find Us On") }}</h4>
              <a href="https://www.facebook.com/tinkamalaysia" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/tinkamalaysia/" target="_blank" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="https://tinka.wasap.my/" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.youtube.com/channel/UCzVZCcd54qeX7OIt66RPYuA/featured" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          </div>
         </div>
      </div>

          <div class="container">
            <div class="copyright">
              &copy; {{ __("Copyright") }} <strong> 2021 <span>Versatile Straits Sdn. Bhd</span></strong>. {{ __("All Rights Reserved") }}
            </div>
          </div>

    </footer><!-- End Footer -->
  </div>