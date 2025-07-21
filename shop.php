<?php
include '../config.php';
$admin = new Admin();
if (!isset($_SESSION['uid'])) {
  echo "<script>window.location='../Login/login/login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nouthemes.net/html/chikery/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:46:39 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>SHOP</title>
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
</head>

<body>
  <?php include 'header.php' ?>
  <!--include search-sidebar-->
  <div class="ps-hero ps-hero--shopping bg--cover" data-background="img/hero/shop-hero.png">
    <div class="ps-hero__container">
      <div class="ps-breadcrumb">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Shop Page</li>
        </ul>
      </div>
      <h1 class="ps-hero__heading">Shop Products</h1>
    </div>
  </div>
  <div class="ps-page--shop">
    <div class="container-fluid">
      <div class="ps-shopping ps-shopping--fullwidth">
        <div class="ps-shopping__left">
          <aside class="widget widget_shop widget_categories">
            <h3 class="widget-title">Categories</h3>
            <ul>
              <?php

              $stmt4 = $admin->ret("select *from `categories` ");
              $i = 0;
              while ($stmt5 = $stmt4->fetch(PDO::FETCH_ASSOC)) {



              ?>
                <li><a href="shop.php?cid=<?php echo $stmt5['cat_id'] ?>"><?php echo $stmt5['category'] ?></a></li>
              <?php } ?>
            </ul>
          </aside>



        </div>
        <div class="ps-shopping__right">

          <div class="ps-product-box">
            <div class="row">

              <?php

              if (isset($_GET['cid'])) {
                $catid = $_GET['cid'];
                $stmt4 = $admin->ret("select *from `product` where `cat_id`='$catid'");
              } else {
                $stmt4 = $admin->ret("select *from `product` ");
              }
              $i = 0;
              while ($stmt5 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
 ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                  <div class="ps-product">
                    <div class="ps-product__thumbnail"><img src="simages/<?php echo $stmt5['product_image'] ?>" alt="" style="width:200px;height:200px" /><a class="ps-product__overlay" href="#"></a>
                    </div>
                    <div class="ps-product__content">
                      <div class="ps-product__desc"><a class="ps-product__title" href="product-default.html"><?php echo $stmt5['pname'] ?></a>
                        <span class="ps-product__price">Rs.<?php echo $stmt5['price'] ?></span>
                      </div>
                      <h4><?php echo $stmt5['discription'] ?></h4>
                      <div class="ps-product__shopping" style="margin-top:7px;margin-left:30px"><a class="ps-btn ps-product__add-to-cart" href="../controller/cart.php?pid=<?php echo $stmt5['p_id'] ?>&qty=1">Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

<!-- Mirrored from nouthemes.net/html/chikery/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:46:39 GMT -->

</html>