<?php
require ('header.php');
?>
<link href="css/products.css" rel="stylesheet">
<link href="css/cart.css" rel="stylesheet">
<div class="container web-content">
  <div class="container web-content-main">
    <div class="back"><i class="fas fa-chevron-left"></i> Continue Shopping</div>
    <div class="cart-section row">
      <div class="cart-left col-md-8">
        <div class="cart-header">
          Your Cart
        </div>
        <div class="cart-products">
          <div class="cart-product">
            <div class="row">
              <div class="col-md-2 cart-img"><img src="images/products/gem1.jpg" class="cart-product-img img-responsive"></div>
              <div class="col-md-5 cart-prod" >
                <div class="cart-product-title">Natural Blue Sapphire</div>
                <div class="cart-product-price">$450.00 <button class="remove-cart"><i class="fas fa-minus-circle"></i></button></div>
              </div>
              <div class="col-md-3 cart-qnty">
                <div class="buy-now">
                  <input type="button" value="-" class="qtyminus" field="quantity1" />
                  <input type="text" name="quantity1" min="1" value="1" class="qty "/>
                  <input type="button" value="+" class="qtyplus" field="quantity1" />
                </div>
              </div>
              <div class="col-md-2 cart-price pink-text">$450.00</div>
            </div>
          </div>
          <div class="cart-product">
            <div class="row">
              <div class="col-md-2 cart-img"><img src="images/products/gem2.jpg" class="cart-product-img img-responsive"></div>
              <div class="col-md-5 cart-prod" >
                <div class="cart-product-title">Natural Blue Sapphire</div>
                <div class="cart-product-price">$450.00 <button class="remove-cart"><i class="fas fa-minus-circle"></i></button></div>
              </div>
              <div class="col-md-3 cart-qnty">
                <div class="buy-now">
                  <input type="button" value="-" class="qtyminus" field="quantity2" />
                  <input type="text" name="quantity2" min="1" value="1" class="qty "/>
                  <input type="button" value="+" class="qtyplus" field="quantity2" />
                </div>
              </div>
              <div class="col-md-2 cart-price pink-text">$450.00</div>
            </div>
          </div>
          <div class="cart-product">
            <div class="row">
              <div class="col-md-2 cart-img"><img src="images/products/gem3.jpg" class="cart-product-img img-responsive"></div>
              <div class="col-md-5 cart-prod" >
                <div class="cart-product-title">Natural Blue Sapphire</div>
                <div class="cart-product-price">$450.00 <button class="remove-cart"><i class="fas fa-minus-circle"></i></button></div>
              </div>
              <div class="col-md-3 cart-qnty">
                <div class="buy-now">
                  <input type="button" value="-" class="qtyminus" field="quantity3" />
                  <input type="text" name="quantity3" min="1" value="1" class="qty "/>
                  <input type="button" value="+" class="qtyplus" field="quantity3" />
                </div>
              </div>
              <div class="col-md-2 cart-price pink-text">$450.00</div>
            </div>
          </div>
        </div>
        <span class="buy-now-btn pull-right">
          <button class="button-hover-addcart button" style="font-size:0.9rem"><span>Update cart</span><i class="fa fas fa-sync"></i></button>
        </span>
      </div>
      <div class="cart-right col-md-4">
        <div class="right-header">Summary</div>
      </div>
    </div>
  </div>

</div>

<?php
require ('footer.php');
?>
