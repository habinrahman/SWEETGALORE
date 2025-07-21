<?php include '../config.php';
$admin = new Admin(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nouthemes.net/html/chikery/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:40:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300i,400,400i,500,500i,600,600i,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/chikery-icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            padding: 0;
            margin: 0
        }

        .wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
        }

        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none
            }

            50% {
                transform: scale3d(1.1, 1.1, 1)
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php' ?>
    <!--include search-sidebar-->
    <div class="ps-page">
      <div class="ps-hero__container">
        <div class="ps-breadcrumb">
          <ul class="breadcrumb">
          <div class="wrapper" style="height:200px;margin-top:100px">
           <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" style="width:200px;height:200px;background-color:#7ac142" >
                 
                 <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                 <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" style="width:200px;height:200px"/>
                 
             </svg>
            

         </div>
          </ul>
          
        </div>
      </div>
    </div>
    <h1 class="ps-hero__heading" style="margin-left:500px;margin-top:100px">Your order is placed successfully</h1>
       <h3  style="margin-left:740px;;"><a href="shop.php">Shop more</a></h3>
       <h3  style="margin-left:740px;;"><a href="feedback.php">Feedback</a></h3>

    </div>
    
    <footer class="ps-footer ps-footer--dark">
      <div class="ps-footer__content">
        <div class="container">
          <div class="ps-footer__left">
            <form class="ps-form--footer-subscribe" action="http://nouthemes.net/html/chikery/index.html" method="get">
              <h3>Get news & offer</h3>
              <p>Sign up for our mailing list to get latest update and offers</p>
              
              <p>* Don't worry, we never spam</p>
            </form>
          </div>
          <div class="ps-footer__center">
            <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="simages/logo.png" alt=""></a>
              <p>Near karnad Avenue, Mulki.</p>
              <p>Email:<a href="#"> <span class="__cf_email__" data-cfemail="ea83848c85aa84859f9e828f878f99c4898587">[email&#160;protected]</span></a></p>
              <p>Phone:<span class="ps-hightlight"> +9742704702</span></p>
            </div>
          </div>
          <div class="ps-footer__right">
            <aside class="widget widget_footer">
              <h3 class="widget-title">Opening Time</h3>
              <p>Monday - Friday:  <span>08:00 am - 08:30 pm</span></p>
              <p>Saturday - Sunday:  <span>10:00 am - 16:30 pm</span></p>
              <ul class="ps-list--payment-method">
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
      <div class="ps-footer__bottom">
        <div class="container">
          <ul class="ps-list--social">
           
          </ul>
         
        </div>
      </div>
    </footer>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="http://nouthemes.net/html/chikery/do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Plugins-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="plugins/jquery-1.12.4.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="plugins/imagesloaded.pkgd.js"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/isotope.pkgd.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/sticky-sidebar/dist/sticky-sidebar.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script srsc="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

<!-- Mirrored from nouthemes.net/html/chikery/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:40:11 GMT -->

</html>