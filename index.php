<?php include"db.php"; ?>
<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>NIT Kurukshetra</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <!-- /web fonts -->
</head>

<body>
  <!-- header -->
  <header class="w3l-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light py-sm-2 py-1 px-0">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/NIT-Kurukshetra.png" alt="NIT" title="NIT" style="height:35px;" />
        </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Cultural
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="avclub.html">AV Club</a>
                    <a class="dropdown-item" href="spicmacay.html">Spicmacay</a>
                    <a class="dropdown-item" href="photography.html">Photography</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Technical
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="aeromodelling.html">Aeromodelling</a>
                    <a class="dropdown-item" href="electroreck.html">Electroreck</a>
                    <a class="dropdown-item" href="emr.html">EMR</a>
                    <a class="dropdown-item" href="icell.html">Industry Cell</a>
                    <a class="dropdown-item" href="infra.html">Infrastructure</a>
                    <a class="dropdown-item" href="mechsoc.html">Mechsoc</a>
                    <a class="dropdown-item" href="microbus.html">Microbus</a>
                    <a class="dropdown-item" href="sae.html">SAE</a>
                    <a class="dropdown-item" href="technobye.html">Technobye</a>

                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- //header -->
  <!--  Main banner section -->
  <section class="w3l-main-banner">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="item">
          <li>
            <div class="slider-info banner-view">
              <div class="banner-info container">
                <h3 class="banner-text"><small>Hello, Welcome To</small><br>
                  Our WebSite
                </h3>
                <p class="my-4 mb-5">NIT Kurukshetra</p><br>
                <a href="about.html" class="btn btn-primary theme-button mr-3">Contact Us</a>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!--  //Main banner section -->


















  <!-- Footer -->
  <footer class="w3l-footer">
    <div id="footers14-block" class="py-3">
      <div class="container">
        <div class="footers14-bottom text-center">
          <div class="social">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
          </div>
          <div class="copyright mt-1">
            <p>© 2020 | All Rights Reserved | Design by <a href="https://best-e.in/">Team Best-E</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

  </footer>
  <!-- Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <script src="assets/js/smartphoto.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>


</body>

</html>