<?php

include 'conn.php';

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
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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
              <li class="nav-item active">
                <a class="nav-link" href="watches.php"> Watches <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
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

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div>

      <div class="row">
        <!-- <div class="col-md-6 ">
          <div class="box">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $300
                  </span>
                </h6>
              </div>

              <div style="border: none; background-color:red;" class="new">
                <span>
                  Featured
                </span>
              </div>
          </div>
        </div> -->

        <?php

        $q = "SELECT * FROM `add_product`";

        $query = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_array($query)) {

          ?>
          <div class="col-sm-6 col-xl-3">
            <div class="box">
              <div class="img-box">
                <img src="images/w2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $row['product_name']; ?>
                </h6>
                <h6>
                  Price: <span style=" color: black;">$</span>
                  <span>
                    <?php echo $row['price']; ?>
                  </span>
                </h6>
              </div>

              <button style="border: none; background-color:red;" onclick="location.href='detail.php';" class="new">
                <span>
                  Buy Now
                </span>
              </button>
            </div>
          </div>

          <?php
        }
        ?>
        <!-- <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $145
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $195
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6  col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $170
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $230
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div> -->
      </div>

      <!-- <div class="btn-box">
        <a href="">
          View All
        </a>
      </div> -->
    </div>
  </section>

  <!-- end shop section -->

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
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>