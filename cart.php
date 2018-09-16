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
        <div class="cart-seperator"></div>
        <div class="promo-section">
          <div class="promo sub-right-header" data-toggle="collapse" href="#cart-collapse" aria-expanded="false" aria-controls="cart-collapse" ><b>Do you have a promo code?</b><i class="fas fa-caret-down"></i></div>
          <div class="collapse" id="cart-collapse">
            <div class="card card-body">
              <input class="promo-code" placeholder="Promo Code"></input><button class="apply-button">Apply Code</button>
            </div>
          </div>
        </div>
        <div class="cart-seperator"></div>
        <div class="subtotal-section clearfix">
          <div class="pull-left"><b>SUBTOTAL</b></div>
          <div class="pull-right pink-text">$800.00</div>
        </div>
        <div class="cart-seperator"></div>
        <div class="promo-section">
          <div class="promo sub-right-header" data-toggle="collapse" href="#cart-collapse2" aria-expanded="false" aria-controls="cart-collapse2" ><b>Shipping and Tax</b><i class="fas fa-caret-down"></i></div>
          <div class="collapse" id="cart-collapse2">
            <div class="card card-body">
              Enter your destination to get a shipping estimate.
              <div class="tax-field-section">
                <div><input class="tax-Country tax-field" placeholder="" style="margin-right:20px"></input><span class="tax-field ">Country</span></div>
                <div><input class="tax-state tax-field" placeholder="" style="margin-right:20px"></input><span class="tax-field ">State</span></div>
                <div><input class="zip tax-field" placeholder=""style="margin-right:20px" ></input><span class="tax-field ">ZIP/Postal Code</span></div>
              </div>
              <button class="apply-button" style="width:100%">Get Quote</button>
            </div>
          </div>
        </div>
        <div class="cart-seperator"></div>
        <div class="total-section clearfix">
          <div class="pull-left"><b>GRAND TOTAL</b></div>
          <div class="pull-right pink-text">$800.00</div>
        </div>
        <button class="checkout-btn" style="width:100%">Proceed to Checkout</button>
      </div>
    </div>
  </div>

</div>

<?php
require ('footer.php');
?>
