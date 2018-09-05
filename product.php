<?php
require ('header.php');
?>
<link href="css/slick.css" rel="stylesheet">
<link href="css/slick-theme.css" rel="stylesheet">

<div class="container web-content">
  <?php require ('breadcrumb.php');?>
  <link href="css/products.css" rel="stylesheet">
  <div class="product-wrapper">
    <div class="row product-row">
      <div class="col-md-8 gem-col">
        <div class="slider-nav">
          <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>

        </div>
        <div class="slideshow">
          <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/1.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/2.jpg"></div>
          <div><img class="product-image-main" src="images/products/prod1/3.jpg"></div>
        </div>
      </div>
      <div class="col-md-4 buy-col">
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
        <div class="static-content">
          <hr>
          <div class="static-1">
            <i class="icon-dollar"></i><div>MONEY BACK GUARANTEE</div><p>100% money back guarantee.</p>
          </div>
          <div class="static-2">
            <i class="icon-lifebuoy"></i><div>ONLINE SUPPORT 24/7</div><p>Happy to help 24x7</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="details-row">
      <div id="tabs">
        <ul>
          <li><a href="#tabs-1">Description</a></li>
          <li><a href="#tabs-2">Additional</a></li>
          <!-- <li><a href="#tabs-3">Tags</a></li> -->
          <li><a href="#tabs-4">Reviews</a></li>
        </ul>
        <div id="tabs-1">
          <div class="tab-content">
            <p>Shimmering Natural Blue Green Sapphire <br>No Any Kind Of Treatments</p>
            <p><br>Dimensions<br>Length : 7.50 mm<br>Width : 4.00 mm<br>Height : 3.00 mm</p>
            <p>Weight : 1.10 Carat</p>
            <p>Shape. : Cushion Cut</p>
            <p>Clarity. : Eye Clean</p>
            <p>With Gemstone Authenticity Confirmation.</p>
            <p>Worldwide Free Shipping.</p>    </div>
          </div>
          <div id="tabs-2">
            <div class="tab-content">
              <table class="data-table" id="product-attribute-specs-table">
                <colgroup><col width="25%">
                  <col>
                </colgroup><tbody>
                  <tr class="first odd">
                    <th class="tb-head">Weight</th>
                    <td class="data last">1.1000</td>
                  </tr>

                  <tr class="even">
                    <th class="tb-head">Natural</th>
                    <td class="data last">Yes</td>
                  </tr>

                  <tr class="odd">
                    <th class="tb-head">Treatments</th>
                    <td class="data last">No Any Kind Of Treatments </td>
                  </tr>

                  <tr class="even">
                    <th class="tb-head">Clarity</th>
                    <td class="data last">VVS11 - Almost Loupe Clean </td>
                  </tr>

                  <tr class="odd">
                    <th class="tb-head">Transparency</th>
                    <td class="data last">Transparent</td>
                  </tr>

                  <tr class="even">
                    <th class="tb-head">Dimensions</th>
                    <td class="data last">7.50 mm X 4.00 mm X 3.00 mm</td>
                  </tr>

                  <tr class="last odd">
                    <th class="tb-head">Cut</th>
                    <td class="data last">Cushion</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
          <div id="tabs-4">
            <div class="add-review">
              <div class="form-add">
                <h3>Write Your Own Review</h3>
                <div class="block-content">
                  <form action="https://www.sapphirepal.com/review/product/post/id/301/" method="post" id="review-form">
                    <input name="form_key" type="hidden" value="94o9jGhguh9c3xov">
                    <fieldset>
                      <ul class="form-list">
                        <li>
                          <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                          <div class="input-box">
                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                          </div>
                        </li>
                        <li>
                          <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                          <div class="input-box">
                            <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                          </div>
                        </li>
                        <li>
                          <label for="review_field" class="required"><em>*</em>Review</label>
                          <div class="input-box">
                            <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                          </div>
                        </li>
                      </ul>
                    </fieldset>
                    <div class="buttons-set">
                      <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require ('footer.php');
?>
