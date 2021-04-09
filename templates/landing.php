
<?php 
  include "../config/dbconfig.php"; 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Meal-Virtue: Working for the needy</title>
  <meta content="" name="description">
  <link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="16x16">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet"> 
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <a href="landing.php"><img src="../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
         
         

        <ul>
          <li class="active"><a href="landing.php">Home</a></li> 
                <li ><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li><a href="registeredngo.php">Registered Organisation</a></li>
                <li class="drop-down"><a href="">My Profile</a>
                  <ul>
                    <li><a href="DONAR/profile.php">Donar Profile</a></li>
                    <li><a href="NGO/ngo_o_profile.php">NGO Profile</a></li>
                    <li><a href="ADMIN/admin.php">Admin Pannel</a></li>
                  </ul>
                </li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="TESTIMONIAL/testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.php">Contact US</a></li>
           
            
          </ul>
     
          <?php

          if (isset($_SESSION['email'])) {
             echo" <img href='profile.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='DONAR/profile.php?logout='1''><b  style='color:#FF7733;font-size:15px;'>Logout</b></a>  </button>
        ";
          };
          ?>



          
          
        </nav>
      </div>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>A single platform for donars to donate food and NGOs to collect</h1>
      <h2>We are dedicated towards that no one should sleep hungry</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Start donating</a>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Why Meal-Virtue</h3>
              <p>
                We are a platform helping you donate your leftover food after an event or party successfully without ny hassle. This will be donated to the underprevilidged.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Donate to NGOs nearest to your location</h4>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Find the appropriate nutritional value your food provides</h4>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Get featured on the leaderboard, redeem points and many other perks..</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">About us</h4>
            <h3 data-aos="fade-up">A multi service platform for NGO and Doners to acheive a hassle free donation process</h3>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxs-donate-heart"></i></div>
              <h4 class="title"><a href="">Donor and NGO accounts</a></h4>
              <p class="description">Register yourself on the website and donate easily</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-body"></i></div>
              <h4 class="title"><a href="">Partners in Change</a></h4>
              <p class="description">Are you working towards a common aim as us? Register your NGO and be our partners in change</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-map"></i></div>
              <h4 class="title"><a href="">Map Based service</a></h4>
              <p class="description">Donate to NGOs nearby to your location by monitoring on the MAP</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-bar-chart-square"></i></div>
              <h4 class="title"><a href="">Donate Raw food as well</a></h4>
              <p class="description">List your items which are near expiry date and get an appropriate nutritional value of the food which is getting wasted</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Events Covered till date</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Users Registered</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Kilogram of food recycled</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Partners in change</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">





        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" data-aos="zoom-in-up">
              <h2>OUR PARTNERS</h2> 
              <p>Who support us economically</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12"  > 
                <img style="width:190px;height:190px;" src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" > 
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12"  > 
                <img style="width:190px;height:190px;" src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg" > 
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12"  > 
                <img style="width:190px;height:190px;" src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg" > 
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12"  > 
                <img style="width:190px;height:190px;" src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg" > 
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Have a lot of food leftovers?</h3>
          <p> Register yourself as a user and get benefits of redeeming the points earned by donating food</p>
          <a class="cta-btn" href="DONAR/profile.php">Register/Login</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">





        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" data-aos="zoom-in-up">
              <h2>What they say</h2>
              <p>Listen from people who have done their bit with us and have donated food for those who don't have access to it.</p>
            </div>
          </div>
          <div class="col-lg-12" data-aos-delay="100">
            <div class="owl-carousel testimonials-carousel">
 
            <?php
                 
                  
                 
                $db = mysqli_connect($servername, $username, $password, $database);
                  
                $testimonial_query = "SELECT * FROM testimonial ORDER BY testimonial_id DESC LIMIT 5";
                $testimonial_res = mysqli_query($db, $testimonial_query);

                $testimonial_num = mysqli_num_rows($testimonial_res);

                if($testimonial_num)
                {
                   while ($row = mysqli_fetch_assoc($testimonial_res)){
                        
                              echo '<div class="testimonial-item">';
                              echo '<p>';
                              echo '<i class="bx bxs-quote-alt-left quote-icon-left"></i>' .$row['testimonial_text']. '<i class="bx bxs-quote-alt-right quote-icon-right"></i>';
                              echo '</p>';
                              echo '<img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">';
                              echo '<h3>Written By: ' .$row['name']. '</h3>';
                              echo'<br>';
                              echo '<h4>From: ' .$row['address']. '</h4>';
                              echo'<br>';
                              echo '<h4><b>Posted On : ' .$row['date']. '</b></h4>';
                             
                              echo '</div>';

                   } 
                }
 
            ?> 


            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Food-Filler</h3>
            <p>
              95/45, NG road Highway <br>
              Raipur, RPR 194402<br>
              India <br><br>
              <strong>Phone:</strong> + 91 992299223<br>
              <strong>Email:</strong> foodfiller@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="landing.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="leaderboard.php">Leaderboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="DONAR/profile.php">See Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donate to US</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Have a suggestion for us? Please write to us</h4>
            <p>You can also write to us your story or your experience with us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Your email">
            </form>
          </div>

        </div>
      </div>
    </div>


<!-- Chatbot -->
<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
  var myLandbot = new Landbot.Livechat({
    configUrl: 'https://chats.landbot.io/v3/H-799241-YZVHV9LUFDSKR4GC/index.json',
  });
</script>
<!-- ChatbotEnd -->



  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>