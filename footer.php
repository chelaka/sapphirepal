<?php

?>
<div id="pre-footer" class="container-fluid pre-footer">
  <div class="container">
    <div class="row pre-footer-row">
      <div class="col-lg-3 about-us">
        <div class="foot-header">My Account</div>
        <ul class="about-list">
          <li><a>About us</a></li>
          <li><a>Return Policy</a></li>
          <li><a>Contact Us</a></li>
          <li><a>My account</a></li>
          <li><a>Orders history</a></li>
          <li><a>Advanced search</a></li>
        </ul>
      </div>
      <div class="col-lg-3 contact">
        <div class="foot-header">Contact Information</div>
        <div class="contact-block">
          <i class="fas fa-compass"></i><p class="contact-heading"><b>Address:</b>
            <br>
            Melbourne, VIC, 3000, Australia</>
          </div>
          <div class="contact-block">
            <i class="fas fa-envelope"></i><p class="contact-heading"><b>Email:</b>
              <br>
              info@sapphirepal.com</>
            </div>
            <div class="contact-block">
              <i class="fas fa-clock"></i></i><p class="contact-heading"><b>Working Days/Hours:</b>
                <br>
                Mon - Sun / 9:00AM - 8:00PM</>
              </div>
            </div>
            <div class="col-lg-3 our-shops">
              <div class="foot-header">Our Shops</div>
              <div class="shop-block">
                <i class="fas fa-location-arrow"></i><p class="contact-heading">Melbourne
                </div>
                <div class="shop-block">
                  <i class="fas fa-location-arrow"></i><p class="contact-heading">Colombo
                  </div>
                </div>
                <div class="col-lg-3 first-to-know">
                  <div class="foot-header">Be the First to Know</div>
                  <p>Get all the latest information on Events,
                    Sales and Offers. Sign up for newsletter today.</p>

                    <br>
                    <br>
                    <p>Enter your e-mail Address</p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="example@example.com">
                      <span class="input-group-btn">
                        <button class="btn btn-default pink-btn" type="button">Submit</button>
                      </span>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div id="footer">
              <div class="container footer-row">
                <div class="row">
                  <div class="col-md-2 footer-logo"><img src="images/assets/main-logo.png" class="img-responsive"></div>
                  <div class="col-md-2 footer-social"><span><i class="fab fa-facebook-f"></i></span><span><i class="fab fa-twitter"></i></span><span><i class="fab fa-linkedin-in"></i></span></div>
                  <div class="col-md-5 footer-cards"><img src="images/assets/payments.png" class="img-responsive"></div>
                  <div class="col-md-3 footer-id"><b>Sapphire Pal</b> - ABN 97 814 438 909</div>
                </div>
              </div>
            </div>

            <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/customjs.js"></script>
            <script src="js/slick.min.js"></script>
            <script>
            $( document ).ready(function() {
              $('#flat-slider').slider({
                orientation: 'horizontal',
                range:       true,
                values:      [1000,9000],
                max: 10000,
                min: 0,
                animate: "fast"
              });

              $('.slideshow').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                speed: 500,
                fade: true,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: false,
                asNavFor: '.slider-nav'
              });

              $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slideshow',
                vertical: true,
                verticalSwiping: true,
                centerPadding: '40px',
                // nextArrow: '<i class="fa fa-arrow-right"></i>',
                // prevArrow: '<i class="fa fa-arrow-left"></i>',
                focusOnSelect: true
              });
            });
            </script>
            <script>
            $( function() {
              $( "#tabs" ).tabs();
            } );
            </script>
          </body>
          </html>
