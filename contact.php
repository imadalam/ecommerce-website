<?php

include 'conn.php';

if(isset($_POST['done']))
	{

		$fullname = $_POST['fullname'];
		$email    = $_POST['email'];
		$number   = $_POST['number'];
		$message  = $_POST['message'];

		$q = " INSERT INTO `contact_form`(`fullname`, `email`, `number`, `message`) VALUES ('$fullname', '$email', '$number', '$message')";

		$query = mysqli_query($conn, $q);
		header("location:contact.php");
		
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Time Zone Watches
  </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
          <img src="images/timezonewatches.png" alt="" width="100px">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="watches.php"> Watches </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
            <div class="user_option-box">
              <a href="Dashboard/login.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section id="cntct" class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>

            <form method="post">
              <div>
                <input type="text" placeholder="Full Name" id="fullname" name="fullname" autocomplete="off" required>
              </div>
              
              <div>
                <input type="email" placeholder="Email"  id="email" name="email" autocomplete="off" required>
              </div>
              
              <div>
                <input type="number" placeholder="Phone number"  id="number" name="number" autocomplete="off" required>
              </div>
              
              <div>
                <input type="text" class="message-box" placeholder="Message" id="message" name="message" autocomplete="off" required>
              </div>
              
              <div class="d-flex ">
                <button type="submit" name="done">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>

            <!-- <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Peshawar Saddar
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +92 31234567
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  tzw99@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Follow Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <span>
                  Twitter
                </span>
              </a>

              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>
                  Facebook
                </span>
              </a>

              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <span>
                  Instagram
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Our Pages
            </h4>
            <div class="contact_link_box">
              <a href="index.php">
                <span>
                  Home
                </span>
              </a>

              <a href="watches.php">
                <span>
                  Watches
                </span>
              </a>

              <a href="about.php">
                <span>
                  About
                </span>
              </a>

              <a href="contact.php">
                <span>
                  Contact
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">Sherry</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>