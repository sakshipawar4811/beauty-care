<?php
include "header.php";
?>
<section id="hero">
    <div class="container-fluid align-items-center d-flex rounded-4" style="
    height:50vh;
          background-image: url(images/background.jpg);
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
        ">
      <div class="hero-content container justify-content-center  text-center">
        <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Checkout</h2>
        <span class="item">
          <a href="index.php" class="text-body">Home /</a>
        </span>
        <span class="item">
          <a href="#" class="text-body">Pages /</a>
        </span>
        <span class="item">Checkout</span>
      </div>
    </div>
    </section>
    <section id="checkout" class="my-lg-7">
    <div class="container-lg">
      <form class="form-group">
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
            <h3 class="text-dark pb-3">Billing Details</h3>
            <div class="billing-details">
              <label for="fname">First Name*</label>
              <input type="text" id="fname" name="firstname" class="form-control mt-2 mb-4 ps-3">
              <label for="lname">Last Name*</label>
              <input type="text" id="lname" name="lastname" class="form-control mt-2 mb-4 ps-3">
              <label for="cname">Company Name(optional)*</label>
              <input type="text" id="cname" name="companyname" class="form-control mt-2 mb-4">
              <label for="cname">Country / Region*</label>
              <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                <option selected="" hidden="">United States</option>
                <option value="1">UK</option>
                <option value="2">Australia</option>
                <option value="3">Canada</option>
              </select>
              <label for="address">Street Address*</label>
              <input type="text" id="adr" name="address" placeholder="House number and street name" class="form-control mt-3 ps-3 mb-3">
              <input type="text" id="adr" name="address" placeholder="Appartments, suite, etc." class="form-control ps-3 mb-4">
              <label for="city">Town / City *</label>
              <input type="text" id="city" name="city" class="form-control mt-3 ps-3 mb-4">
              <label for="state">State *</label>
              <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                <option selected="" hidden="">Florida</option>
                <option value="1">New York</option>
                <option value="2">Chicago</option>
                <option value="3">Texas</option>
                <option value="3">San Jose</option>
                <option value="3">Houston</option>
              </select>
              <label for="zip">Zip Code *</label>
              <input type="text" id="zip" name="zip" class="form-control mt-2 mb-4 ps-3">
              <label for="email">Phone *</label>
              <input type="text" id="phone" name="phone" class="form-control mt-2 mb-4 ps-3">
              <label for="email">Email address *</label>
              <input type="text" id="email" name="email" class="form-control mt-2 mb-4 ps-3">
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="text-dark pb-3">Additional Information</h3>
            <div class="billing-details">
              <label for="fname">Order notes (optional)</label>
              <textarea class="form-control pt-3 pb-3 ps-3 mt-2" placeholder="Notes about your order. Like special notes for delivery."></textarea>
            </div>
            <div class="your-order mt-5">
              <h3 class="display-7 text-dark pb-3">Cart Totals</h3>
              <div class="total-price">
                <table cellspacing="0" class="table">
                  <tbody>
                    <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                      <th>Subtotal</th>
                      <td data-title="Subtotal">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">$</span>1,500.00 </bdi>
                        </span>
                      </td>
                    </tr>
                    <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                      <th>Total</th>
                      <td data-title="Total">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">$</span>1,500.00 </bdi>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="list-group mt-5 mb-3">
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="" checked="">
                    <span>
                      <strong class="text-uppercase">Direct bank transfer</strong>
                      <small class="d-block text-body-secondary">Make your payment directly into our bank account.
                        Please use your Order ID. Your order will shipped after funds have cleared in our
                        account.</small>
                    </span>
                  </label>
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios2" value="">
                    <span>
                      <strong class="text-uppercase">Check payments</strong>
                      <small class="d-block text-body-secondary">Please send a check to Store Name, Store Street, Store
                        Town, Store State / County, Store Postcode.</small>
                    </span>
                  </label>
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios3" value="">
                    <span>
                      <strong class="text-uppercase">Cash on delivery</strong>
                      <small class="d-block text-body-secondary">Pay with cash upon delivery.</small>
                    </span>
                  </label>
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios3" value="">
                    <span>
                      <strong class="text-uppercase">Paypal</strong>
                      <small class="d-block text-body-secondary">Pay via PayPal; you can pay with your credit card if
                        you don’t have a PayPal account.</small>
                    </span>
                  </label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary rounded-2 px-5 py-3 mt-3 w-100">Place an
                  order</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section id="instagram-wrap" class="bg-overlay ">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social1.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social2.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social3.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social4.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social5.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social6.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-lg-7">
    <div class="container-fluid">
      <div class="mb-5">
        <h2 class="display-3 fw-bold text-black text-capitalize">People are also looking for</h2>
      </div>

      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">PureGlow
        Daily
        Cleanser</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Fresh Dew
        Hydrating
        Face Wash</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Velvet
        Touch Cream
        Cleanser</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Radiance
        Revival Gel
        Wash</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Hydraluxe
        Daily
        Moisturizer</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">GlowRenew
        Skin
        Quench Cream</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">DewDrop
        Lightweight
        Hydration</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">VelvetGlow
        Rich
        Hydrating Balm</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">SilkFusion
        Deep
        Moisture Cream</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Blue
        diamon
        almonds</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Angie’s
        Boomchickapop Corn</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Salty
        kettle
        Corn</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Chobani
        Greek
        Yogurt</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Sweet
        Vanilla
        Yogurt</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Foster
        Farms Takeout
        Crispy wings</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">DewDrop
        Lightweight
        Hydration</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">VelvetGlow
        Rich
        Hydrating Balm</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">SilkFusion
        Deep
        Moisture Cream</a>
    </div>
  </section>














<?php
include "footer.php";
?>
