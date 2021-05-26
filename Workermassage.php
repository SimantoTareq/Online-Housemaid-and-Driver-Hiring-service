<?php session_start();
if (isset($_SESSION['workerid'])) {

  $workerid = $_SESSION['workerid'];

?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversation with Admin</title>
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


    <a class="btn btn-outline-info" href="workermassage.php" role="button" style="margin-top: 20px; margin-bottom: 20px; margin-left: 50%;">Conversation with Admin</a>


    <?php require_once 'workermessagetoadmin.php'; ?>
    <div class="row justify-content-center">
      <form action="workermessagetoadmin.php" method="POST">

        <div class="form-group">
          <label>Message</label>
          <input type="text" name="massage" class="form-control" placeholder="Enter your message">
        </div>




        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </div>
      </form>
    </div>
    <br /><br />
    <div class="massage" style=" width:500px; align-content: center;">
      <div class="blockquote text-center">Admin:</div>


      <?php
      //Connect to your database....
      $con = mysqli_connect("localhost", "root", "", "workerreview");
      $contact_array = mysqli_query($con, "SELECT * FROM massage WHERE toperson = '$workerid' or fromperson = '$workerid' ORDER BY massageid ASC");
      while ($row = mysqli_fetch_array($contact_array)) {


        if ($row['fromperson'] == '1234') {
      ?>
          <div class="leftmassage" style="text-align:left;color:red; border:20px">
            <?php echo $row['massage']; ?></div>
        <?php
        } else { ?>
          <div class="rightmassage" style="text-align:right;color:blue">
            <?php echo $row['massage']; ?></div>
      <?php }
      }
      ?>
      <a href="worker.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true" style="margin:20px 20px;">Go Back</a>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" style="margin-top: 18px">
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

      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>

  </html>

<?php } ?>