<header class="header header--default header--home-4 white" data-sticky="true">
  
  <div class="header__center">
    <div class="header__logo"><a class="ps-logo" href="index.php"><img src="simages/logo.png" width="60px" style="border-radius:50px;" alt=""></a></div>

    <nav class="header__navigation left">
      <ul class="menu">
        <li class="current-menu-item menu-item-has-children"><a href="index.php">Home</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>

        </li>
        <li class="menu-item-has-children"><a href="shop.php">Shop</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>

        </li>
        <li><a href="about.php">ABOUT</a>
        </li>
        <li><a href="trackorder.php">track order</a>
        </li>

      </ul>
    </nav>

  </div>
  <?php if (!isset($_SESSION['uid'])) { ?>
    <div class="header__center" style="margin-left:100px">

    <nav class="header__navigation left">
      <ul class="menu">
      
        <li><a href="../Login/login/login.php">Login</a>
        </li>
        <li><a href="../Login/login/index.html">Register</a>
        </li>

      </ul>
    </nav>

  </div>
 
  <?php } else { ?>

    <div class="header__right">
      <a href="../controller/logout.php" style="margin-right:10px">Logout</a>
      <div class="header__actions">
      <?php 
                         
                       $id=$_SESSION['uid'];
                          $stmt=$admin->ret("SELECT count(*) as total from `cart` WHERE `c_id`='$id' ");
                         $row=$stmt->fetch(PDO::FETCH_ASSOC)
                         ?>
        <div class="ps-cart--mini"><a class="ps-cart__toggle" href="#"><i class="fa fa-shopping-basket"></i><span><i>   <?php echo $row['total']; ?></i></span></a>
          <div class="ps-cart__content">
            <div class="ps-cart__items">
              <?php
              $id = $_SESSION['uid'];



              $grand_total = 0;

              $t_price = 0;
              $stmt = $admin->ret("select * from product INNER JOIN cart on cart.p_id=product.p_id where cart.c_id='$id'");
              $i = 0;
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $t_price = $row['price'] * $row['quantity'];

                $grand_total = $grand_total + $t_price;
              ?>
                <div class="ps-product--mini-cart">

                  <td><?php ++$i; ?></td>
                  <div class="ps-product__thumbnail"><a href="#"><img src="../image/<?php echo $row['product_image'] ?>" width="50px" alt=""></a></div>
                  <div class="ps-product__content"><span class="ps-btn--close"></span><a class="ps-product__title" href="product-default.html"><?php echo $row['pname'] ?></a>
                    <p><strong>Quantity: <?php echo $row['quantity'] ?></strong></p><small><?php echo $t_price ?></small>
                  </div>

                </div>
              <?php } ?>
            </div>


            <?php if ($i == 0) { ?>
              <div class="ps-cart__footer">
                <h3>Your cart is empty</h3>
                <figure><a class="ps-btn" href="shop.php">Shop</a></figure>

              </div>
            <?php } else { ?>
              <div class="ps-cart__footer">
                <h3>Sub Total:<strong><?php echo $grand_total ?></strong></h3>
                <figure><a class="ps-btn" href="cart.php">View Cart</a></figure>
              </div>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>
</header>
<header class="header header--mobile" data-sticky="false">
  <div class="header__content">
    <div class="header__left"><a class="ps-toggle--sidebar" href="#navigation-mobile"><i class="fa fa-bars"></i></a></div>
    <div class="header__center"><a class="ps-logo" href="#"><img src="img/logo.png" alt=""></a></div>
    <div class="header__right">
      <div class="header__actions"><a href="#"><i class="fa fa-heart-o"></i></a></div>
    </div>
  </div>
</header>
<div class="ps-panel--sidebar" id="cart-mobile">
  <div class="ps-panel__header">
    <h3>Shopping Cart</h3>
  </div>
  <div class="navigation__content">
    <div class="ps-cart--mobile">
      <div class="ps-cart__content">
        <div class="ps-cart__items">
          <div class="ps-product--mini-cart">
            <div class="ps-product__thumbnail"><a href="#"><img src="img/product/12.png" alt=""></a></div>
            <div class="ps-product__content"><span class="ps-btn--close"></span><a class="ps-product__title" href="product-default.html">Jean Woman Summer</a>
              <p><strong>Quantity: 1</strong></p><small>$12.00</small>
            </div>
          </div>
          <div class="ps-product--mini-cart">
            <div class="ps-product__thumbnail"><a href="#"><img src="img/product/13.png" alt=""></a></div>
            <div class="ps-product__content"><span class="ps-btn--close"></span><a class="ps-product__title" href="product-default.html">Jean Woman Summer</a>
              <p><strong>Quantity: 1</strong></p><small>$12.00</small>
            </div>
          </div>
        </div>
        <div class="ps-cart__footer">
          <h3>Sub Total:<strong>$48.00</strong></h3>
          <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn ps-btn--dark" href="checkout.html">Checkout</a></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ps-panel--sidebar" id="navigation-mobile">
  <div class="ps-panel__header">
    <h3>Menu</h3>
  </div>
  <div class="ps-panel__content">
    <ul class="menu--mobile">
      <li class="current-menu-item menu-item-has-children"><a href="index.php">Home</a><span class="sub-toggle"></span>

      </li>
      <li class="menu-item-has-children"><a href="shop.php">Shop</a><span class="sub-toggle"></span>

      </li>
      <li><a href="about-us.html">About</a>
      </li>

      <li class="menu-item-has-children"><a href="blog-grid.html">News</a><span class="sub-toggle"></span>
        <ul class="sub-menu">
          <li><a href="blog-grid.html">Blog grid</a>
          </li>
          <li><a href="blog-grid-full-width.html">Blog grid fullwidth</a>
          </li>
          <li><a href="blog-list.html">Blog List</a>
          </li>
          <li><a href="blog-detail.html">Blog Detail</a>
          </li>
        </ul>
      </li>
      <li><a href="contact-us.html">Contact</a>
      </li>
    </ul>
  </div>
</div>
<div class="navigation--list">
  <div class="navigation__content"><a class="navigation__item active" href="index.html"><i class="fa fa-home"></i></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="fa fa-bars"></i></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="fa fa-search"></i></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="fa fa-shopping-basket"></i></a></div>
</div>