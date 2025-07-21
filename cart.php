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
  <title>User Cart</title>
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
  <div class="ps-page">
    <div class="ps-hero bg--cover" data-background="img/hero/shop-hero.png">
      <div class="ps-hero__container">
        <div class="ps-breadcrumb">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Cart</li>
          </ul>
        </div>
        <h1 class="ps-hero__heading">Cart</h1>
      </div>
    </div>
    <div class="container">
      <div class="ps-shopping-cart">
        <div class="table-responsive">
          <table class="table ps-table ps-table--shopping-cart">
            <thead>
              <tr>
                <th>Product </th>
              
                <th>Price</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = $_SESSION['uid'];

              $grand_total = 0;



              $t_price = 0;
              $stmt = $admin->ret("select * from product INNER JOIN cart on cart.p_id=product.p_id where cart.c_id='$id'");
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <?php

                $t_price = $row['price'] * $row['quantity'];

                $grand_total = $grand_total + $t_price;




                ?>
                <tr>
                  <td>
                    <div class="ps-product--cart">
                      <div class="ps-product__thumbnail"><img src="../image/<?php echo $row['product_image'] ?>" alt=""><a class="ps-product__overlay" href="product-detail.html"></a></div>
                      <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html"><?php echo $row['pname'] ?></a></div>
                    </div>
                  </td>
                  <td>
                  <div class="ps-product--cart">
                    Rs.<?php echo $row['price'] ?>
                  </div>
                </td>
                  <td>
                    <div class="form-group--number">
                      <button class="up" onclick="incrrement(<?php echo $row['p_id']; ?>)" type="button" style="width:50px"></button>
                      <button class="down" onclick="dec(<?php echo $row['p_id']; ?>)" type="button" style="width:50px"></button>
                      <input class="form-control" name="quantity" id="qty3" maxlength="12" value="<?php echo $row['quantity'] ?>" title="Quantity:">
                    </div>
                  </td>
                  <td class="total"> Rs.<?php echo $t_price ?></td>
                  <td class="ps-table__actions"><a class="ps-btn--close" href="#"></a></td>
                </tr>

              <?php } ?>


            </tbody>
          </table>
        </div>
        <script type="text/javascript">
          function incrrement(id) {


            var effect = document.getElementById('qty3');
            var qty = effect.value;


            // if(!isNaN(qty))effect.value;

            window.location = '../controller/cart.php?qty=' + qty + '&pid=' + id + '&type=inc';
            return false;

          }

          function dec(id) {

            var effect = document.getElementById('qty3');

            var qty = effect.value;
            if (parseInt(qty) <= 1) {

              document.getElementById(qty3).value = -1;

            }
            // if(!isNaN(qty))effect.value--;

            window.location = '../controller/cart.php?qty=' + qty + '&pid=' + id;
            return false;

          }
        </script>
        <div class="ps-section__actions">
          <figure><a class="ps-btn" href="shop.php">Continue Shopping</a></figure>
        </div>
        <div class="ps-section__footer">
          <div class="ps-shopping-cart__coupon">
            <div class="form-group">

            </div>
          </div>
          <figure class="ps-shopping-cart__total">
            <figcaption>Cart Total</figcaption>
            <table class="table">
              <tr>
                <td>SubTotal</td>
                <td><strong>Rs.<?php echo $grand_total ?></strong></td>
              </tr>
              <tr>

              </tr>
              <tr class="total">
                <td>Total</td>
                <td>Rs.<?php echo $grand_total ?></td>
              </tr>
            </table><a class="ps-btn ps-btn--fullwidth" href="../controller/order.php?gt=<?php echo $grand_total ?>&tprice=<?php echo  $t_price ?>">Proceed to checkout</a>
          </figure>
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

<!-- Mirrored from nouthemes.net/html/chikery/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:40:11 GMT -->

</html>