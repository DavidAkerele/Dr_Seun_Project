<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../../assets/css/animate.css" rel="stylesheet">
  <link href="../../assets/css/aos.css" rel="stylesheet">
  <link href="../../assets/css/icons/icons.css" rel="stylesheet">
  <link href="../../assets/css/boxicons/css/boxicons.css" rel="stylesheet">
  <link href="../../assets/css/remixicon/remixicon.css" rel="stylesheet">
  <!-- <link href="../../assets/css/swiper-bundle.min.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="../../assets/css/custom.css">
  <link href="../../assets/css/main.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="../home/index.php" class="logo me-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../home/index.php">Home</a></li>
              <li><a href="#">Log out</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../about/about.html">About Us</a></li>
              <li><a href="../about/meet-the-team.html">Meet the Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="../courses/courses.html"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../courses/course-details.html">Basics of Computing</a></li>
              <li><a href="../courses/course-details-1.html">MS Word, Excel & Powerpoint</a></li>
              <li><a href="../courses/course-details-2.html">Web Development</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tutors</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../tutors/trainers.html">See Tutors</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tutorial</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../events/events.html">Upcoming Tutorials</a></li>
              <li><a href="../events/previous-events.html">Previous Tutorials</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pricing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../pricing/pricing.html">See Pricing</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../contact/contact.html">Send a Message</a></li>
              <li><a href="../contact/meet-us.html">Meet Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="../services/our-services.html"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../services/services-1.html">Microsoft Tools</a></li>
              <li><a href="../services/services-2.html">Web Development</a></li>
              <li><a href="../services/services-3.html">IT Training</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../profile/viewprofile.html">View Profile</a></li>
              <li><a href="../profile/editprofile.html">Edit Profile</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../account/signup.php">Sign Up</a></li>
              <li><a href="../account/login.php">Login</a></li>
            </ul>
          </li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../account/signup.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <?php
    session_start();
    include '../../backend/database.php';
    $ID = $_SESSION["ID"];
    $sql = mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
    $row = mysqli_fetch_array($sql);
  ?>
            
  <img src="../../backend/upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%; display:block; margin-left:auto; margin-right:auto;" />
	<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["Full_Name"] ?></p>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>WELCOME TO <span id = "hero-literate">LITERATE</span></h1>
      <h2>We offer you the best and most informative <br> courses in Information Technology.</h2>
      <a href="../account/signup.php" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../../assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ABOUT LITERATE</h3>
            <p class="fst-italic">
              Literate is an online learning platform where people new to computing can come and gain
              valuable knowledge to help kickstart their career in computing or improve 
              existing knowledge in specific areas.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> You can get access to course content for free.</li>
              <li><i class="bi bi-check-circle"></i> Course content are very detailed and understandable.</li>
              <li><i class="bi bi-check-circle"></i> For better understanding, videos are provided.</li>
              <li><i class="bi bi-check-circle"></i> We are available 24/7.</li>
            </ul>
            <p>
              You are guaranteed a smooth ride once you register with us. Go ahead and check out <b><a href="../courses/courses.html" id="myref" style= "color:#20BEC1;">Our Courses</a></b> and 
              <b><a href="../account/signup.html" id="myref" style= "color:#20BEC1;">Get Started</a></b>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Literate?</h3>
              <p>
                Literate is a great online platform for learning about computer related concepts. The great part
                about it is that its totally free. No one charges you a dime. All you have to do is sign up and get access to
                courses of your choice for free.
              </p>
              <div class="text-center">
                <a href="../about/about.html" class="more-btn">More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Free</h4>
                    <p>On Literate, you have free access to all courses.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Informative</h4>
                    <p>The courses available on literate are packed with lots of information for your benefit</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-alarm"></i>
                    <h4>Available 24/7</h4>
                    <p>Literate is here to attend to all your knowledge-based needs all-day everyday</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="courses" class="courses">

      
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Courses</h2>
          <p>Our Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="../../assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Introduction to Computing</h4>
                  <p class="price">Free</p>
                </div>

                <h3><a href="../courses/course-details.html">Basics of Computing</a></h3>
                <p>Here, you'll learn about the basics of computing. You'll learn about how to use a computer.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="../../assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Digital Literacy</h4>
                  <p class="price">Free</p>
                </div>

                <h3><a href="../courses/course-details-1.html">MS Word, Excel, Powerpoint</a></h3>
                <p>Here, you'll learn how to make use of Microsoft Word, Excel and Powerpoint.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="../../assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">Free</p>
                </div>

                <h3><a href="../courses/course-details-2.html">Website Development</a></h3>
                <p>Here, you'll learn how to design and develop websites.</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Team Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>The Team</h2>
          <p>The people responsible for literate</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../../assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Adegbehingbe Oluwakorede</h4>
                <span>HTML & CSS Development, UI UX Design</span>
                <p>
                  Joseph worked on the front end design of Literate using HTML and CSS.
                  He also worked the UI UX of the website.
                </p>
                <div class="contact-info">
                  <p>Email: <i>josephkorede36@gmail.com</i> </p>
                  <p>Phone: <i>+234 8021351855</i> </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../../assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Akerele David</h4>
                <span>JavaScript & PHP, UI UX Design</span>
                <p>
                  David worked on the functionality of the website using JavaScript and also worked on the backend using PHP.
                  He also designed the UI UX of the site.
                </p>
                <div class="contact-info">
                  <p>Email: <i>josephkorede36@gmail.com</i> </p>
                  <p>Phone: <i>+234 8021351855</i> </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../../assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Adeoshun Olayinka Paul</h4>
                <span>Digital Literacy</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="contact-info">
                  <p>Email: <i>josephkorede36@gmail.com</i> </p>
                  <p>Phone: <i>+234 8021351855</i> </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="../../assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Agunbiade Joel</h4>
                  <span>HTML & CSS Development</span>
                  <p>
                    Joseph worked on the front end design of Literate using HTML and CSS.
                  </p>
                  <div class="contact-info">
                    <p>Email: <i>josephkorede36@gmail.com</i> </p>
                    <p>Phone: <i>+234 8021351855</i> </p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="../../assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Akuwudike, Chidiebube Elton</h4>
                  <span>Digital Literacy</span>
                  <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                  <div class="contact-info">
                    <p>Email: <i>josephkorede36@gmail.com</i> </p>
                    <p>Phone: <i>+234 8021351855</i> </p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="../../assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Asibor Ebenezer</h4>
                  <span>Digital Literacy</span>
                  <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                  <div class="contact-info">
                    <p>Email: <i>josephkorede36@gmail.com</i> </p>
                    <p>Phone: <i>+234 8021351855</i> </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="../../assets/img/team/team-1.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Bello Emmanuel</h4>
                    <span>HTML & CSS Development</span>
                    <p>
                      Joseph worked on the front end design of Literate using HTML and CSS.
                    </p>
                    <div class="contact-info">
                      <p>Email: <i>josephkorede36@gmail.com</i> </p>
                      <p>Phone: <i>+234 8021351855</i> </p>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="../../assets/img/team/team-2.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Djekou Johnsen Dacouri</h4>
                    <span>Digital Literacy</span>
                    <p>
                      Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="contact-info">
                      <p>Email: <i>johnsendjekou5@gmail.com</i></p>
                      <p>Phone: <i>+234 8101575120</i></p>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="../../assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Elujoba Olorunfemi</h4>
                    <span>Digital Literacy</span>
                    <p>
                      Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="contact-info">
                      <p>Email: <i>elujobaolorunfemiayodeji@gmail.com</i> </p>
                      <p>Phone: <i>+234 8136338498</i> </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="../../assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Eto-Ihekwaba Owen</h4>
                    <span>Digital Literacy</span>
                    <p>
                      Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="contact-info">
                      <p>Email: <i>josephkorede36@gmail.com</i> </p>
                      <p>Phone: <i>+234 8021351855</i> </p>
                    </div>
                  </div>
                </div>
              </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="../home/index.html" class="logo me-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>
            <p>
              Babcock University<br>
              Ilishan-Remo, Ogun State<br>
              NIgeria <br><br>
              <strong>Phone:</strong> +234 9059033185<br>
              <strong>Email:</strong> literatehq@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../home/index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../about/about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/our-services.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../contact/contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-1.html">Microsoft Tools</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-2.html">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-3.html">IT Training</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Enter your email below to subscribe to our newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          Designed by <strong style="color: #20BEC1;">Group 9</strong>
        </div>
      </div>
      <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../../assets/js/aos.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <script src="../../assets/js/swiper-bundle.min.js"></script>
  <script src="../../assets/css/php-email-form/validate.js"></script>

  <script src="../../assets/js/main.js"></script>

</body>

</html>