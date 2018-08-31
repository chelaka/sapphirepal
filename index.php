<?php
require ('header.php');
?>
<div class="main-body">
  <div class="container-fluid top-bar">
    <div class="row">
      <div class="col-md-1">
        <input type="checkbox" id="navcheck" role="button" title="menu">
        <label for="navcheck" aria-hidden="true" title="menu">
          <span class="burger">
            <span class="bar">
              <span class="visuallyhidden">Menu</span>
            </span>
          </span>
        </label>
        <nav id="menu">
          <a href="products.php">Shop Gemstones</a>
          <a href="#">Shop Jewelry</a>
          <a href="#">Gallery</a>
          <a href="#">Education</a>
          <a href="#">Community Services</a>
          <a href="#">FAQ</a>
          <a href="#">Contact Us</a>
        </nav>
      </div>
      <div class="col-md-5 col-md-offset-6 top-right">
        <div class="col-md-3 t-title">
          <a href="#">Your Cart<span class="cart-count">6</span></a>

        </div>
        <div class="col-md-4 t-title">
          <a href="#">FAQ</a>
          <a href="#">Forum</a>
          <a href="#">Contact</a>
        </div>
        <div class="col-md-2 t-title">
          <a href="#">Wishlist</a>
        </div>
        <div class="col-md-3 t-title">
          <a href="#">Login</a> |
          <a href="#">Signup</a>
        </div>
      </div>
    </div>
    <div class="container-fluid footer">

      <div class="col-md-1 logo-section">
        <div class="row">
          <div class="logo">
            <img id="home-logo" src="images/assets/main-logo.png" class="img-responsive main-logo">
          </div>
        </div>
        <div class="row">
          <div class="social-icons">
            <ul>
              <li><i class="fab fa-facebook-f"></i></li>
              <li><i class="fab fa-instagram"></i></li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-youtube"></i></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="white-overlay">
  <img src="images/assets/overlay.png" class="img-responsive white-overlay">
</div>


<?php
require ('footer.php');
?>
