<?php session_start();
if (isset($_SESSION['adminid'])) {

  $adminid = $_SESSION['adminid'];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Admin</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/minion.png" rel="icon" />
    <link href="assets/img/minion.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css" />

  </head>

  <body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
      <div class="container d-flex justify-content-between">
        <div class="contact-info">
          <ul>
            <li>
              <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
            </li>
            <li><i class="icofont-phone"></i> +880-17123456789</li>
            </li>
            <li><i class="icofont-address-book"></i> Bashundhara, Dhaka-1229</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex justify-content-between">
        <div class="logo">
          <h1 class="text-light">
            <a href="index.php"><span>MINION</span></a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#job">Job</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="drop-down"><a href="login.html">Login</a>
              <ul>
                <li class="drop-down"><a href="usersignin.php">As User</a></li>
                <li class="drop-down"><a href="workersignin.php">As Worker</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="register.html" class="btn btn-outline-primary">Sign Up</a>
              <ul>
                <li class="drop-down"><a href="usersignup.php">As User</a></li>
                <li class="drop-down"><a href="Workersignup.php">As Worker</a></li>
              </ul>
            </li>
          </ul>
          <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->
    <div class="container p-t-100 p-b-100 p-r-100 p-l-100">
      <a class="btn btn-outline-info" href="admin.php" role="button">Admin</a><br />
      <?php
      //Connect to your database....
      $con = mysqli_connect("localhost", "root", "root", "workerreview");
      $contact_array = mysqli_query($con, "SELECT * FROM admin WHERE $adminid = '1234' ");
      while ($row = mysqli_fetch_array($contact_array)) {
        echo "Welcome  ";
        echo $row['adminname'];
        echo "<br/>";
      } ?>
      <div class="row justify-content-center">
        <div class="topnav">
          <a href="usermessage.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin-top:20px; margin-right: 20px;">Send Massage</a>
          <a href="processlogout.php?logout" class="btn btn-warning btn-lg active" role="button" aria-pressed="true" style="margin-top:20px; margin-right: 20px;">Logout</a>
        </div>
      </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>MINION</h3>
              <p>
                Bashundhara, Dhaka-1229<br />
                Bangladesh <br /><br />
                <strong>Phone:</strong> +88 017 123 456 789<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Web Development</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Product Management</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Graphic Design</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>
                Tamen quem nulla quae legam multos aute sint culpa legam noster
                magna
              </p>
              <form action="" method="post">
                <input type="email" name="email" /><input type="submit" value="Subscribe" />
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-lg-flex py-4">
        <div class="me-lg-auto text-center text-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>MINION</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Created by <a href="#">Group 03</a>
          </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

  </html>

<?php } ?>