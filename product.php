<?php
require ('header.php');
?>
<link href="css/slick.css" rel="stylesheet">
<link href="css/slick-theme.css" rel="stylesheet">

<div class="container web-content">
  <?php require ('breadcrumb.php');?>
  <link href="css/products.css" rel="stylesheet">
  <div class="row product-row">
    <div class="col-md-4 gem-col">
      <div class="slideshow">
        <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
      </div>
      <div class="slider-nav">
        <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
        <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
      </div>
    </div>
    <div class="col-md-5 buy-col">
      <div class="product-name">Natural Blue Sapphire</div>
      <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elit dictum, ullamcorper dui non, vulputate ex. Donec quis volutpat mi. Nunc sed varius purus. Vestibulum blandit feugiat elit vel aliquet. Ut faucibus lorem mauris, ut ornare tortor porta eu. </div>
      <div class="availability"><span class="av-header">Availability: </span><span class="av-value available">In Stock</span></div>
      <div class="price pink-text">$450.00</div>
      <div class="buy-now">
        <input type="button" value="-" class="qtyminus" field="quantity" />
        <input type="text" name="quantity" min="1" value="1" class="qty "/>
        <input type="button" value="+" class="qtyplus" field="quantity" />
        <span class="buy-now-btn">
          <button class="button-hover-addcart button"><span>Add to cart</span><i class="fa fa-shopping-cart"></i></button>
        </span>
      </div>
    </div>
    <div class="col-md-3 static-col">
      <div class="static-1">
        <i class="icon-dollar"></i><h5>MONEY BACK GUARANTEE</h5><p>100% money back guarantee.</p>
      </div>
      <div class="static-2">
        <i class="icon-lifebuoy"></i><h5>ONLINE SUPPORT 24/7</h5><p>Happy to help 24x7</p>
      </div>
    </div>
  </div>
</div>
</div>
<?php
require ('footer.php');
?>
