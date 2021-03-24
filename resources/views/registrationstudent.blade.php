<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @extends('layouts.studentlayout')

 
</head>

<body>

 
  <!-- ======= Header ======= -->
  @include('header')
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
                <header class="section-header" data-aos="fade-right" data-aos-delay="100">
                    <h2>Register</h2>
                    <p>Hello Future Tinkers!</p>
                  </header>
            
                  <form id="survey-form" data-aos="zoom-in" data-aos-delay="100">

                    <div class="form-group">
                      <label id="fullname-label" for="fullname">Full Name</label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Enter your name"
                        required
                      />
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
                        />Male</label
                      >
                      <label>
                        <input
                          name="gender"
                          value="female"
                          type="radio"
                          class="input-radio"
                        />Female</label
                      >
                    </div>
      
                    <div class="form-group">
                      <label id="birthdate" for="birthdate"
                        >Birthdate</label
                      >
                      <input
                        type="date"
                        name="birthdate"
                        id="birthdate"
                        class="form-control"
                        placeholder=""
                      />
                    </div>

                    <div class="form-group">
                      <label id="guardianname-label" for="guardianname">Father / Mother / Guardian Name</label>
                      <input
                        type="text"
                        name="guardianname"
                        id="guardianname"
                        class="form-control"
                        placeholder="Enter your father/mother/guardian name"
                        required
                      />
                    </div>

                    <div class="form-group">
                      <label id="guardianphonenum-label" for="guardianphonenum">Father / Mother / Guardian Phone Number</label>
                      <input
                        type="text"
                        name="guardianphonenum"
                        id="guardianphonenum"
                        class="form-control"
                        placeholder="Enter your father/mother/guardian phone number"
                        required
                      />
                    </div>
      
                    <div class="form-group">
                      <label id="email-label" for="email">Email</label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Enter your Email"
                        required
                      />
                    </div>
      
                    <div class="form-group">
                      <label id="username-label" for="username">Username</label>
                      <input
                        type="text"
                        name="username"
                        id="username"
                        class="form-control"
                        placeholder="Enter your username"
                        required
                      />
                    </div>
      
                    <div class="form-group">
                      <label id="password-label" for="password">Password</label>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required
                      />
                    </div>
      
                    <div class="form-group">
                      <label id="confirmpassword-label" for="confirmpassword">Password</label>
                      <input
                        type="password"
                        name="confirmpassword"
                        id="confirmpassword"
                        class="form-control"
                        placeholder="Re-enter your password"
                        required
                      />
                    </div>
                                 
                    <div class="form-group">
                      <label id="currentschoolname-label" for="currentschoolname">Your Current School Name</label>
                      <input
                        type="text"
                        name="currentschoolname"
                        id="currentschoolname"
                        class="form-control"
                        placeholder="School Name"
                        required
                      />
                    </div>
                
                    <div class="form-group">
                      <label id="classchoice-label" for="classchoice">Classes That You Are Interested In</label>
                      <select id="dropdown" name="classchoice" class="form-control" required>
                        <option disabled selected value>Physical Tuition Class/Online Class/Home Tuition </option>
                        <option value="physicaltuitin">Physical Tuition</option>
                        <option value="onlineclass">Online Class</option>
                        <option value="hometuition">Home Tuition</option>
                      </select>
                    </div>
      
                    <div class="form-group">
                      <label id="photo-label" for="photo">Your Photo</label>
                      <input
                        type="file"
                        name="photo"
                        id="photo"
                        class="form-control"
                        required
                      />
                    </div>
      
              <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                  Submit
                </button>
              </div>
            </form>
          </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Versatile Straits Sdn. Bhd</span></strong>. All Rights Reserved
      </div>
     
        
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>